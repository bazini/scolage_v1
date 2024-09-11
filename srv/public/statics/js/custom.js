/* Add here all your JS customizations */
var url = window.location.origin, lg = $("html").attr("lang"), ajaxUrl = url+"/index.php/ajax/";
jQuery(document).ready(function($) {
	user_activity();
	$(".tooltip").tooltip();
	// En validant le formulaire
	$("#noteForm").submit(function(e) {
		loading();
	});
	// En attendant l'action du lien
	$(".wait-action").click(function () {
		loading();
	});
	/**
		* Valider automatiquement un formulaire
		*/
	$("#dynform").find("select, input").change(function(e) {
		var c = $(this);
		$("#dynform").trigger('submit');
	});
	$("body").on("click", ".del", function (e) {
		var c = $(this), msg = c.data("msg"), link = c.attr("href");
		if (msg !== undefined) {
			e.preventDefault();
			$.confirm({
				title: 'A votre attention!',
				type: "red",
				typeAnimated: true,
				content: msg,
				buttons: {
					OK: {
						text: "Oui",
						btnClass: "btn-blue",
						action: function (a) {
							window.location.href = link;
						}
					},
					NO: {
						text: "Non",
						btnClass: "btn-red",
						action: function (a) {}
					}
				}
			})
		}
	});
	//Effacer les alerts
	window.setTimeout(function() {
    $(".inner-notif").fadeTo(500, 0).slideUp(500, function(){
      $(this).remove(); 
    });
	}, 10000);
	// Mettre la date par défaut
	var dt = $("#date");
	if (dt.html() !== undefined && dt.val().length == 0) {
		var today = new Date(), y = today.getFullYear(), mm = today.getMonth()+1, dd = today.getDate(), m, d, date;
		m = (mm < 10)?"0"+mm:mm;
		d = (dd < 10)?"0"+dd:dd;
		date = y+"-"+m+"-"+d;
		dt.val(date);
	}
	// Placer le datepicker
	var dte = $(".date");
	if (dte.html() !== undefined) {
		if (jQuery().datepicker) {
			$(".date").datepicker();
		}
	}
	// Placer la nationalité
	var nationalite = $("#nationalite");
	if (nationalite.html() != undefined) {
		if (nationalite.val().length == 0) {
			nationalite.val('Togolaise');
		}
	}
	// Visibilité des options de titre
	$(".tr-title").mouseover(function (){
		var c = $(this), v = c.find(".action-td");
		v.css('visibility', 'visible');
	});
	$(".tr-title").mouseout(function (){
		var c = $(this), v = c.find(".action-td");
		v.css('visibility', 'hidden');
	});
	// Lorsqu'on quitte le champ nom
	$("#nom").keyup(function(e) {
		var c = $(this), nom = $.trim(c.val()), prenoms = $.trim($("#prenoms").val());
		if (nom.length > 0 && prenoms.length > 0) {
			formatName(nom, prenoms);
		}
	});
	// Lorsqu'on quitte le champ prénoms
	$("#prenoms").keyup(function(e) {
		var c = $(this), prenoms = $.trim(c.val()), nom = $.trim($("#nom").val());
		if (nom.length > 0 && prenoms.length > 0) {
			formatName(nom, prenoms);
		}
	});
	// Générer un code secret
	$("#generateCode").click(function(){
		var code = generate();
		$("#secret").val(code);
	});
	// Aller chercher les séries pour une classe
	$(".change-classe").change(function(e) {
		var c = $(this), idv = c.val(), id = parseInt(idv, 10), serie = $("#serie").val(), s = parseInt(serie, 10), name = $("#name").val(), serie_id = $("#serie_id").val(), cls_id = $("#cls_id").val(), variant = $("#variant_id").val();
		if (idv.length > 0) {
			if (id >= 12) {
				$(".wait-loading").find("select").attr('disabled', 'disabled');
				$(".wait-loading").find("img").removeClass('hidden');
				$.post(ajaxUrl+"get-class-series", {id: id}, function(data, textStatus, xhr) {
					$(".wait-loading").find("select").removeAttr('disabled');
					$(".wait-loading").find("img").addClass('hidden');
					if (!data.error) {
						var options = "", selected = "", txt;
						if (serie == null) {
							options += "<option value=''></option>";
						} else {
							selected = s;
						}
						$.each(data.data, function(index, val) {
							if (val.id == selected) {
								txt = ' selected="selected"';
							} else {
								txt = '';
							}
							options += "<option value='"+val.id+"'"+txt+">"+val.nom+"</options>";
						});
						$(".wait-loading").find("select").html(options);
						$(".wait-loading").find("select").attr("required", "required");
					} else {
						info("danger", data.ermsg);
					}
				}, "JSON");
				if (serie != null) {
					if (!isNaN(s)) {
						// console.log(id, cls_id, s, serie_id);
						if (cls_id == id && s == parseInt(serie_id, 10)) {
							$("#nom_canonique").val(name);
							$("#variant").val(variant);
						} else {
							canonical_name(id, s);
						}
					} else {
						$("#nom_canonique").val("");
					}
				}
			} else {
				$(".wait-loading").find("select").removeAttr('disabled');
				$(".wait-loading").find("img").addClass('hidden');
				$(".wait-loading").find("select").html("<option value=''></option>");
				$(".wait-loading").find("select").removeAttr("required");
				if (cls_id == id) {
					$("#nom_canonique").val(name);
					$("#variant").val(variant);
				} else {
					canonical_name(id, false);
				}
			}
		} else {
			$(".wait-loading").find("select").removeAttr('disabled');
			$(".wait-loading").find("img").addClass('hidden');
			$(".wait-loading").find("select").html("<option value=''></option>");
		}
	});
	// Lorsqu'on change les séries
	$("#serie").change(function(e){
		var c = $(this), ids = c.val(), id = parseInt(ids, 10), classe = $("#classe").val(), cls = parseInt(classe, 10), name = $("#name").val(), serie_id = $("#serie_id").val(), cls_id = $("#cls_id").val(), variant = $("#variant_id").val();
		if (classe.length > 0) {
			if (cls_id == cls && id == parseInt(serie_id, 10)) {
				$("#nom_canonique").val(name);
				$("#variant").val(variant);
			} else {
				canonical_name(cls, id);
			}
		}
	});
	//Lorsqu'on clique sur le bouton d'état
	$(".activate-state").click(function(e){
		var c = $(this), id = c.val(), state;
		if (c.is(":checked")) {
			state = 1;
		} else {
			state = 0;
		}
		$.post(ajaxUrl+"toggle-level", {id: id, state: state});
	});
	// Lorsqu'on change de couleur
	$(".fee-filter-color").change(function () {
		var c = $(this), couleur = c.val(), cf = $(".custom-filter");
		if (couleur == 'custom') {
			cf.removeClass('hidden');
			cf.find("input").attr("required","required");
		} else {
			cf.addClass('hidden');
			cf.find("input").removeAttr("required");
			cf.find("input").val('');
		}
	});
	// Lorsqu'on quitte les champs personnalisé de filtre
	$(".end-filter").change(function(){
		var c = $(this), montant = c.val(), precedent = $(".start-filter").val(), mnt = parseInt(montant, 10), prec = parseInt(precedent, 10);
		if (prec > mnt) {
			info("danger", "Le montant final est inférieur au montant de départ");
			c.val('');
		}
	});
	$(".start-filter").change(function(){
		var c = $(this), montant = c.val(), final = $(".end-filter").val(), mnt = parseInt(montant, 10), fn = parseInt(final, 10);
		if (fn < mnt) {
			info("danger", "Le montant final est inférieur au montant de départ");
			c.val('');
		}
	});
	// Lorsqu'on change de matière
	$(".set-mat-prof").change(function(){
		var c = $(this), mat = c.val();
		if (mat) {
			get_profs(mat);
		}
	});
	// Charger les matières et les découpages
	$(".set-class-note-params").change(function(){
		var c = $(this), id = c.val();
		if (id) {
			$.post(ajaxUrl+"get-class-note-params", {id: id}, function(data, textStatus, xhr) {
				if (!data.error) {
					var subjects = data.subjects, decoupages = data.decoupages, sop = "", dop = "";
					$.each(subjects, function(i, v) {
						sop += "<option value='"+v.id+"'>"+v.nom_court+"</option>";
					});
					$.each(decoupages, function(i, v) {
						dop += "<option value='"+v.id+"'>"+v.nom+"</option>";
					});
					$("#subject").html(sop);
					$("#decoupage").html(dop);
				}
			}, "JSON");
		} else {
			$("#subject").html('');
			$("#decoupage").html('');
		}
	});
	// Contrôle des entrées du formulaire
	$(".control-note-input").keyup(function (){
		var c = $(this), note = c.val();
		console.log(note);
		if (!isNaN(note)) {
			if (note > 20.0) {
				c.val(0.0);
			} else if (note < 0) {
				c.val(0);
			} else {
				c.val(note);
			}
		}
	});
	$(".control-note-input").change(function() {
		var c = $(this), note = c.val();
		if (!isNaN(note)) {
			if (note > 20.0) {
				c.val(0.0);
			} else if (note < 0) {
				c.val(0);
			} else {
				c.val(note);
			}
		} else {
			c.val(0.0);
		}
	});
	// Générer un bulletin
	$(".generate-gradebook").click(function(e) {
		e.preventDefault();
		var c = $(this), id = c.data("id"), anid = c.data("anid"), an = c.data("an"), dec = c.data("dec"), decoupage = c.data("decoupage");
		gen_bulletin(id, an, dec);
	});
	// Visualiser un bulletin
	$(".show-gradebook").click(function() {
		var c = $(this), id = c.data("id"), anid = c.data("anid"), an = c.data("an"), dec = c.data("dec"), decoupage = c.data("decoupage");
		var dlg = loading();
		$.post(ajaxUrl+"show-bulletin", {id: id, anid: anid, an: an, dec: dec, decoupage: decoupage}, function(data, textStatus, xhr) {
			dlg.close();
			if (!data.error) {
				//
			} else {
				info("danger", data.ermsg);
			}
		}, "JSON");
	});
	// En saisant le nom d'un élève
	if (jQuery().select2) {
		$(".std-list").select2({
			ajax: {
				url: ajaxUrl+"get-stds",
				dataType: 'json',
				data: function (params) {
					var query = {"nom": params.term}
					return query;
				},
				processResults: function (data, params) {
					params.page = params.page || 1;
			    return {
		        results: data.results,
		        pagination: {
		          more: (params.page * 10) < data.count_filtered
		        }
			    };
			  }
			}
		});
	}
	// Quand on passe la souris sur l'emploi du temps
	$(".time-td").mouseover(function(){
		var c = $(this);
		c.removeClass('tm-action');
	});
	$(".time-td").mouseout(function(){
		var c = $(this);
		c.addClass('tm-action');
	});
	// Lorsque le DataTable est présent
	if (jQuery().dataTable) {
		$(".dataTable").dataTable({
			"language": {
        processing:     "Traitement en cours...",
        search:         "Rechercher&nbsp;:",
        lengthMenu:    "Afficher _MENU_ &eacute;l&eacute;ments",
        info:           "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
        infoEmpty:      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
        infoFiltered:   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        infoPostFix:    "",
        loadingRecords: "Chargement en cours...",
        zeroRecords:    "Aucun &eacute;l&eacute;ment &agrave; afficher",
        emptyTable:     "Aucune donnée disponible dans le tableau",
        paginate: {
            first:      "Premier",
            previous:   "Pr&eacute;c&eacute;dent",
            next:       "Suivant",
            last:       "Dernier"
        },
        aria: {
            sortAscending:  ": activer pour trier la colonne par ordre croissant",
            sortDescending: ": activer pour trier la colonne par ordre décroissant"
        }
    	},
			paging: true,
			fixedHeader: true
		});
	}
	// Sélectionner tout
	$("#checkAll").click(function(e) {
		var c = $(this), isChecked = c.is(":checked"), chk = $(".getChecked");
		if (isChecked) {
			chk.prop("checked", true);
		} else {
			chk.prop("checked", false);
		}
	});
	// Lorsqu'on désélectionne un élément de la liste
	$(".getChecked").click(function(e) {
		var c = $(this), isChecked = c.is(":checked"), checkAll = $("#checkAll");
		if (!isChecked) {
			checkAll.prop("checked", false);
		} else {
			var chks = $(".getChecked"), nbc = 0, tbc = chks.length;
			$.each(chks, function(index, val) {
				var cid = "std"+val.value, isc = $("#"+cid).is(":checked");
				if (isc) {
					nbc += 1;
				}
			});
			if (nbc == tbc) {
				checkAll.prop("checked", true);
			}
		}
	});
	// Transérer la liste des élèves
	$(".start-transfert").click(function (e) {
		var c = $(".getChecked"), lis = '', ids = "";
		if (c) {
			$.each(c, function(index, val) {
				var std = val.value, st = $("#std" + std + ":checked"), s = st.val(), name = st.data("name");
				if (s !== undefined) {
					lis += "<li class='list-group-item'>"+name+"</li>";
					if (ids.length > 0) {
						ids += ", " + std;
					} else {
						ids = std;
					}
					st.parent().parent().remove();
				}
			});
			if (lis.length > 0) {
				$("#destList").append(lis);
				var arcls = $("#destCls").val();
				var wait = loading();
				$.post(ajaxUrl + "transfert-std", {id: arcls, ids: ids}, function(data, textStatus, xhr) {
					wait.close();
					if (data.error) {
						info("danger", data.ermsg);
					}
				}, "JSON");
			}
		}
	});
	//Voir dans le modal
	var sm = $(".showInModal");
	if (sm !== undefined && sm.length !== 0) {
		sm.click(function (e){
			e.preventDefault();
			var c = $(this), content = c.data("content"), title = c.data("title"), wd = c.data("width");
			$.dialog({
				title: title,
				type: 'blue',
				typeAnimated: true,
				columnClass: (wd !== undefined)?wd:"small",
				content: content
			});
		})
	}
	// Voir le code de sucurité
	$('.toggle-show-password').click(function(e) {
		var c = $(this), parent = c.prev(), tp = parent.attr('type');
		if (tp === 'password') {
			// check_password
			promptForm(c, parent);
		} else {
			parent.attr('type', 'password');
			c.find('.fa').removeClass('fa-eye-slash').addClass('fa-eye');
		}
	});
	// Voir le mot de passe
	$('.toggle-password').click(function(e) {
		var c = $(this), parent = c.prev(), tp = parent.attr('type');
		if (tp === 'password') {
			parent.attr('type', 'text');
			c.find('.fa').removeClass('fa-eye').addClass('fa-eye-slash');
		} else {
			parent.attr('type', 'password');
			c.find('.fa').removeClass('fa-eye-slash').addClass('fa-eye');
		}
	});
	$("#togglePassword").click(function() {
		// console.log(i.hasClass('fa-eye'))
		const c = $(this);
		const i = c.find('.fas');
		if (i.hasClass('fa-eye')) {
			c.prev().attr('type', 'text');
			i.removeClass('fa-eye').addClass('fa-eye-slash');
		} else {
			c.prev().attr('type', 'password');
			i.removeClass('fa-eye-slash').addClass('fa-eye');
		}
	});
	/**
	 * Inscrire les admis dans une classe
	 */
	const ia = $('#inscrireAdmis');
	if (ia.html() !== undefined) {
		const cls = ia.data('cls');
		const id = ia.data('id');
		ia.DataTable({
			ajax: `/ajax/get-eleve-admis?cls=${cls}&id=${id}`,
			dataSrc: 'data',
			order: [],
			columns: [
				{
					data: (data, row, index) => {
						return `<input type="checkbox" id="std${data.id}" value="${data.id}" class="custom-checkbox check-admi-std" ${data.is_registered ? 'checked="checked"': ''}>`;
					}
				},
				{data: (data, row, index) => {
					return `<label for="std${data.id}" style="-webkit-user-select: none">${data.nom} ${data.prenoms}</label>`;
				}},
				{data: 'sexe'},
				{data: 'classe_nom'},
				{data: 'moyenne'},
			],
			"language": {
				url: '/public/statics/json/datatable/fr-FR.json',
			},
			pageLength: 25
		});
		$('.check-admi').on('click', '.check-admi-std', function() {
			const c = $(this);
			const std = c.val();
			var state = 1;
			if (c.is(':checked')) {
				state = 0;
			}
			$.post('/ajax/inscrire-admi', {id, std, state}, function(data, textStatus, xhr) {
				if (data.error) {
					info('danger', data.ermsg);
					c.prop('checked', false);
				}
			}, "JSON");
		});
	}
});
// Calculer le nom canonique de la classe
function canonical_name(cls, serie) {
	if (serie != false) {
		if (serie == "NaN") {
			$("#nom_canonique").val("");
			$("#variant").val("");
		} else {
			if ((serie == 6 && cls != 12) || (cls == 12 && (serie == 7 || serie == 8))) {
				$("#nom_canonique").val("");
				$("#variant").val("");
			} else {
				get_class_name(cls, serie);
			}
		}
	} else {
		get_class_name(cls, serie);
	}
}
// Faire la requête de calcule du nom de la classe
function get_class_name(cls, serie) {
	$.post(ajaxUrl+"get-class-name", {cls: cls, serie: serie}, function(data, textStatus, xhr) {
		if (!data.error) {
			$("#nom_canonique").val(data.data.name);
			$("#variant").val(data.data.variant);
		} else {
			info("danger", data.ermsg);
		}
	}, "JSON");
}
// Usage du serveur
function get_server_usage() {
	$.get(ajaxUrl+"get-memory-usage", function(result) {
		if (!result.error) {
			(function() {
				if( $('#flotDashRealTime').get(0) ) {
					var data = [],
						totalPoints = 300;

					function getRandomData() {

						if (data.length > 0)
							data = data.slice(1);

						// Do a random walk
						/*while (data.length < totalPoints) {

							var prev = data.length > 0 ? data[data.length - 1] : 50,
								y = prev + Math.random() * 10 - 5;

							if (y < 0) {
								y = 0;
							} else if (y > 100) {
								y = 100;
							}

							data.push(y);
						}*/
						data = result.data;

						// Zip the generated y values with the x values
						var res = [];
						for (var i = 0; i < data.length; ++i) {
							res.push([i, data[i]])
						}

						return res;
					}

					var flotDashRealTime = $.plot('#flotDashRealTime', [getRandomData()], {
						colors: ['#8CC9E8'],
						series: {
							lines: {
								show: true,
								fill: true,
								lineWidth: 1,
								fillColor: {
									colors: [{
										opacity: 0.45
									}, {
										opacity: 0.45
									}]
								}
							},
							points: {
								show: false
							},
							shadowSize: 0
						},
						grid: {
							borderColor: 'rgba(0,0,0,0.1)',
							borderWidth: 1,
							labelMargin: 15,
							backgroundColor: 'transparent'
						},
						yaxis: {
							min: 0,
							max: 100,
							color: 'rgba(0,0,0,0.1)'
						},
						xaxis: {
							show: false
						}
					});

					function update() {

						flotDashRealTime.setData([getRandomData()]);

						// Since the axes don't change, we don't need to call plot.setupGrid()
						flotDashRealTime.draw();
						setTimeout(update, ($('html').hasClass( 'mobile-device' ) ? 1000 : 30) );
					}

					update();
				}
			})();
			// setTimeout(get_server_usage, 5000);
		} else {

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
// Formatter le nom
function formatName(nom, prenoms) {
	$.post(ajaxUrl + "format-name", {nom: nom, prenoms: prenoms}, function(data, textStatus, xhr) {
		if (data) {
			if (!data.error) {
				var name = data.data;
				$("#pseudo").val(name);
			}
		}
	}, "JSON");
}
//Générer un mot alétoire
function generate() {
	var ok = "23456789azertyupqsdfghjkmwxcvbn";
	var mot = "";
	var longueur = 6;
	for (var i = 0; i < longueur; i++) {
		var wpos = Math.round(Math.random()*ok.length);
		mot += ok.substring(wpos,wpos+1);
	}
	return mot;
}
//Générer un mot de passe aléatoire
function pass_gen(cible) {
	var ok = "azertyupqsdfghjkmwxcvbn23456789AZERTYUPQSDFGHJKMWXCVBN&!?][@~+-{}()";
	var pass = "";
	var longueur = 6;
	for (var i = 0; i < longueur; i++) {
		var wpos = Math.round(Math.random()*ok.length);
		pass += ok.substring(wpos,wpos+1);
	}

	$("#"+cible).val(pass);
}
// Vérifier varinuellement la session
function user_activity() {
	$.get(ajaxUrl, function(data) {
		if (data.error) {
			$("[data-lock-screen]").trigger("click");
		} else {
			setTimeout(function(){
				user_activity();
			}, 15000);
		}
	}, "JSON");
}
// Charger la liste des enseignants d'une matière
function get_profs(id) {
	$.post(ajaxUrl+"get-mat-profs", {id: id}, function(data, textStatus, xhr) {
		if (!data.error) {
			var options = "";
			$.each(data.data, function(i, v) {
				options += "<option value='"+v.id+"'>"+v.civilite+" "+v.nom+" "+v.prenoms+"</option>";
			});
			if (options.length > 0) {
				$(".mat-profs").html(options);
			} else {
				$(".mat-profs").html('');
			}
		} else {
			$(".mat-profs").html('');
		}
	}, "JSON");
}
// Faire une requête pour générer les bulletins
function gen_bulletin(id, an, dec) {
	var stopLoop = false;
	$.dialog({
    title: 'Initialisation',
    type: 'blue',
    typeAnimated: true,
    closeIcon: '',
    content: 'Récupération de la liste des élèves',
    onContentReady: function () {
      var self = this;
      $.post(ajaxUrl + "get-class-std", {id: id, an: an, dec: dec}, function(data, textStatus, xhr) {
    		if (!data.error) {
    			calculateNotes(data.data, id, dec, an, self);
    		} else {
    			self.close();
    			info('danger', data.ermsg);
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
}
function calculateNotes(donnees, id, dec, an, self) {

	(function student(i){
		var std = donnees[i].id, nb = donnees.length;
		$.post(ajaxUrl + "calcul-moyenne", {id: id, an: an, dec: dec, std: std}, function(data, textStatus, xhr) {
			if (!data.error) {
				if (i == 0) {
					self.setTitle('Calcul des moyennes par élève');
				}
				var taux = ((i+1)*100)/nb, rt = Math.round(taux);
				var cnt = '<div class="progress"><div class="progress-bar" role="progressbar" style="width: '+taux+'%;" aria-valuenow="'+taux+'" aria-valuemin="0" aria-valuemax="100">'+rt+'%</div></div>';
				self.setContent(cnt);
				if (i < donnees.length - 1) {
					i++;
					student(i);
				} else {
					self.setContent(cnt);
					setTimeout(function(){
						self.setTitle('Génération du fichier');
						self.setContent('Veuillez patienter....');
						generate_bul_file(an, id, dec, self);
					}, 1000);
				}
			} else {
				self.close();
				info('danger', data.ermsg);
			}
		}, "JSON");
	})(0);
}
function generate_bul_file(an, id, dec, self) {
	$.post(ajaxUrl + "generate-bulletin-file", {id: id, an: an, dec: dec}, function(data, textStatus, xhr) {
		self.close();
		if (!data.error) {
			var file = $("#show-pdf");
			file.attr("src", "/index.php/bulletin/show-file?file=" + data.data);
			window.open("/index.php/bulletin/show-file?file=" + data.data);
		} else {
			info('danger', data.ermsg);
		}
	}, "JSON");
}
function promptForm(c, parent) {
	var prompt = $.confirm({
	    title: 'A votre attention',
	    icon: 'fa fa-exclamation-triangle',
	    type: 'red',
	    typeAnimated: true,
	    content: '' +
	    '<form action="" class="formName">' +
	    '<div class="form-group">' +
	    '<label>Confirmez votre identité!</label>' +
	    '<input type="password" placeholder="Entrez votre mot de passe!" class="pass form-control" required />' +
	    '</div>' +
	    '</form>',
	    buttons: {
	        formSubmit: {
	            text: 'Valider',
	            btnClass: 'btn-blue',
	            action: function () {
	                var pass = this.$content.find('.pass').val();
	                if(!pass){
	                    info('danger', 'Veuillez saisir quelque chose')
	                    return false;
	                }
	                var wait = loading();
	                $.post(ajaxUrl + 'check-password', {pass}, function(data) {
	                	wait.close()
	                	if (!data.error) {
	                		parent.attr('type', 'text');
	                		c.find('.fa').removeClass('fa-eye').addClass('fa-eye-slash');
	                		prompt.close()
	                	} else {
	                		info('danger', data.ermsg)
	                	}
	                }, 'JSON');
	                return false;
	            }
	        },
	        cancel: {
	        	text: 'Annuler'
	        }
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