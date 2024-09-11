var url = window.location.origin, lg = $("html").attr("lang"), ajaxUrl = url+"/index.php/ajax/";
jQuery(document).ready(function($) {
	moment.locale('fr');
	// Les logs
	getlogs();
	$("#logForm").submit(function(event) {
		event.preventDefault();
		$(".log-body").find('*').remove();
		// $('#logs').DataTable().ajax.reload();
		getlogs();
	});
	// Liste des mlle
	if (jQuery().dataTable != undefined) {
		$('#mlleList').dataTable({
			ajax: `/ajax/get-eleve-mlle`,
			dataSrc: 'data',
			order: [],
			columns: [
				{data: 'id'},
				{data: (data, row, index) => `${data.nom} ${data.prenoms}`},
				{data: 'classe_nom'},
				{data: 'mlle'},
				{data: (data, row, index) => `${moment(data.date).format('LL')}`},
			],
			"language": {
				url: '/public/statics/json/datatable/fr-FR.json'
			},
			paging: true,
			fixedHeader: true,
		})
	}
	// Générer les matricules
	$("#generateMlle").click(function(e) {
		e.preventDefault();
		$.dialog({
		    title: 'Initialisation',
		    type: 'blue',
		    typeAnimated: true,
		    closeIcon: 'fa fa-close',
		    content: 'Récupération de la liste des élèves...',
		    onContentReady: function () {
		    	var self = this;
		   		$.get("/ajax/get-eleve-list", function(data, textStatus, xhr) {
		    		if (textStatus == 'success') {
		    			browseStd(data, 0, self);
		    		} else {
		    			self.close();
		    			info('danger', `Une erreur s'est produite`);
		    		}
		    	}, "JSON");
		    },
		    columnClass: 'small',
		    buttons: {
		    	cancel: {
		        text: 'En arrière plan',
		        btnClass: 'btn-primary btn-flat'
		    	}
		  	}
		});
	});
	$("#removeStd").click(function(e) {
		e.preventDefault();
		var clsId = parseInt($("#classe").val(), 10);
		var decId = parseInt($("#decoupage").val(), 10);
		if (!isNaN(clsId) && !isNaN(decId)) {
			var load = loading();
			$.post('/ajax/deactive-std', {id: clsId, dec: decId}, function(data, textStatus, xhr) {
				load.close()
				if (!data.error) {
					info('info', `${data.data} personnes ont été exclues`);
				} else {
					info('danger', data.ermsg);
				}
			}, "JSON");
		}
	});
	/**
	 * Toggle show password
	 */
	$("#togglePassword").click(function() {
		const c = $(this);
		const i = c.find('i.fas');
		if (i.hasClass('fa-eye')) {
			c.prev().attr('type', 'text');
			i.removeClass('fa-eye').addClass('fa-eye-slash');
		} else {
			c.prev().attr('type', 'password');
			i.removeClass('fa-eye-slash').addClass('fa-eye');
		}
	});
});
function browseStd(std, index, self) {
	if (std[index] !== undefined) {
		var nb = std.length
		var taux = ((index+1)*100)/nb, rt = Math.round(taux);
		var cnt = '<div class="progress"><div class="progress-bar" role="progressbar" style="width: '+taux+'%;" aria-valuenow="'+taux+'" aria-valuemin="0" aria-valuemax="100">'+rt+'%</div></div>';
		self.setTitle('Création des matricules');
		self.setContent(cnt);
		var elv = std[index];
		var i = index + 1;
		$.post('/ajax/format-mlle', {id: elv}, function(data, textStatus, xhr) {
			if (data.error) {
				console.warn(data.ermsg);
			}
			browseStd(std, i, self);
		}, "JSON");
	} else {
		$('#mlleList').DataTable().ajax.reload();
		self.close();
	}
}
function getlogs() {
	jQuery(document).ready(function($) {
			var debut = $("#debut"), fin = $("#fin"), deb, fn;
			if (debut !== undefined && fin !== undefined) {
				deb = debut.val();
				fn = fin.val();
				$('#logs').DataTable({
					"ajax": {
				    "url": ajaxUrl+"get-logs?debut="+deb+"&fin="+fn,
				    "dataSrc": function ( data ) {
				      return data;
				    }
				  },
					"language": {
						url: "/public/statics/json/datatable/fr-FR.json"
					},
					paging: true,
					fixedHeader: true,
					pageLength: 25
				});
				/*$.post(ajaxUrl+"get-logs", {debut: deb, fin: fn}, function(data, textStatus, xhr) {
					console.log(data);
				}, "JSON");*/
			}
	});
}
//Afficher un message de dialogue
function info (type, msg) {
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