var url = window.location.origin, ajaxUrl = url+"/index.php/ajax/";
jQuery(document).ready(function($) {
	// Vérification de la licence en ligne
	$("#checklic").submit(function(e) {
		e.preventDefault();
		var c = $(this), nom = c.find("#nom").val(), prenoms = c.find("#prenoms").val(), contact = c.find("#contact").val(), sexe = c.find(".sexe:checked").val();
		if (sexe != undefined) {
			var dlg = loading();
			$.get(ajaxUrl + "get-licence", function(data) {
				var d = data.data;
				$.post('https://licence.age.tg/index.php/ajax/verify-licence', {
					app: d.app,
					cha: d.cha,
					processeur: d.proc,
					serial: d.lic,
					nom: nom,
					prenoms: prenoms,
					sexe: sexe,
					contact: contact
				}, function(dts, textStatus, xhr) {
					dlg.close();
					if (!dts.error) {
						if (dts.data == d.lic) {
							$.get(ajaxUrl + 'set-licence', function(lc) {
								if (!lc.error) {
									window.location.href = url+'/index.php/account.html';
								} else {
									info("danger", "Une erreur empêche l'enregistrement de la licence");
								}
							}, "JSON");
						} else {
							info("danger", "La licence ne correspond pas");
						}
					} else {
						info("danger", dts.ermsg);
					}
				}, "JSON");
			}, "JSON");
		} else {
			info("danger", "Veuillez préceiser le sexe");
		}
	});
	// Raccourcis
	$.key('ctrl+shift+z', function() {
	  checkAdminPassword();
	});
	// Lorqu'on cherche un fichier de licence
	$("#licenceFile").change(function(){
		$("#submitLic").trigger("submit");
	});
	// lorque le formulaire est validé
	$("#submitLic").submit(function(e){
		e.preventDefault();
		var $form = $(this);
		var formdata = (window.FormData) ? new FormData($form[0]) : null;
		var data = (formdata !== null) ? formdata : $form.serialize();
		$.ajax({
	    url: ajaxUrl+"verify-licence",
	    type: $form.attr('method'),
	    contentType: false, // obligatoire pour de l'upload
	    processData: false, // obligatoire pour de l'upload
	    dataType: 'json', // selon le retour attendu
	    data: data,
	    success: function (d) {
	    	if (d.error) {
	    		info("danger", d.ermsg);
	    	} else {
	    		var text = d.data;
	    		var blob = new Blob([text], {type: "text/plain;charset=utf-8"});
	    		saveAs(blob, "Licence.txt");
	    	}
	    },
	    error: function (er) {
	    	console.log(er);
	    }
		});
	});
});
function checkAdminPassword() {
	$.confirm({
	  title: 'Mot de passe d\'administrateur!',
	  content: '' +
	  '<form action="" class="formName">' +
	  '<div class="form-group">' +
	  '<label>Entrer le mot de passe</label>' +
	  '<input type="password" placeholder="Votre mot de passe ici" class="name form-control" autofocus required />' +
	  '</div>' +
	  '</form>',
	  buttons: {
      formSubmit: {
        text: 'Valider',
        btnClass: 'btn-blue',
        action: function () {
          var name = this.$content.find('.name').val();
          if(!name){
            $.alert('Le champ mot de passe est obligatoire');
            return false;
          }
          checkPassword(name);
        }
      },
      cancel: function () {
        //
      },
	  },
	  onContentReady: function () {
      // bind to events
      var jc = this;
      this.$content.find('form').on('submit', function (e) {
        // if the user submits the form by pressing enter in the field.
        e.preventDefault();
        jc.$$formSubmit.trigger('click'); // reference the button and click it
      });
	  }
	});
}
function checkPassword(passe) {
	var dlg = loading();
	$.post(ajaxUrl+"check-password", {passe: passe}, function(data, textStatus, xhr) {
		dlg.close();
		if (!data.error) {
			$("#licenceFile").trigger("click");
		} else {
			info("danger", data.ermsg);
		}
	}, "JSON");
}
//Afficher un message de dialogue
function info (type,msg) {
	var tp;
	switch (type) {
		case "danger":
			titre = "Erreur"
			tp = "red";
			break;
		case "success":
			titre = "Opération effectuée"
			tp = "green";
			break;
		case "info":
			titre = "Information"
			tp = "blue";
			break;
		default:
			titre = "Information";
			tp = "blue";
			type = "info";
	}
	var d = $.alert({
		title: titre,
		type: tp,
		typeAnimated: true,
		content: msg,
		buttons: {
			ok: {
				text: 'OK',
				btnClass: 'btn-'+type
			}
		}
	});
	return d;
}
//En cours de chargement
function loading () {
	var d = $.dialog({
		title: "Traitement en cours...",
		typeAnimated: true,
		type: 'blue',
		closeIcon: false,
		content: "<p class='text-center'><img src='/public/statics/images/ajaxloader.gif'></p>"
	});
	return d;
}