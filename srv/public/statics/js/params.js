var url = window.location.origin, lg = $("html").attr("lang"), ajaxUrl = url+"/index.php/ajax/";
jQuery(document).ready(function($) {
	// Lorsqu'on clique sur le lien importer
	$("#photo").change(function (){
		var files = $(this)[0].files;
		if (files.length > 0){
			file = files[0]; var preview = $('#imgPreview'), type = file.type, ext = type.split("/")[1];
			var aut = []; aut.push("jpeg"); aut.push("jpg"); aut.push("png"); aut.push("gif");
			var s = $.inArray(ext, aut, 0);
			if (s != -1){
	      preview.find('img').attr('src', window.URL.createObjectURL(file));
			} else {
				alert("Type de fichier non autorisé");
			}
		}
	});
	// Surveiller le changement dans l'URL
	var av = $('#SetAvatarThumb').val();
	if (av.length > 0) {
		var stdId = $('#stdId').val(), avUrl = $('#avUrl').val();
		var dlg = loading('Enregistrement de la photo de l\'élève');
		$.post(ajaxUrl+'set-std-avatar', {id: stdId, img: av}, function(data, textStatus, xhr) {
			if (!data.error) {
				window.location.href = avUrl;
			} else {
				info('danger', data.ermsg);
			}
		}, 'JSON');
	}
	// En cas de clique sur le boutons de paramètres
	$(".hook-radio").find('input[type=radio]').click(function(e) {
		var c = $(this), v = c.val(), input = c.parent().parent().next().find('input'), iha = input.attr('disabled');
		if (v == 'non') {
			if (!iha) {
				input.attr('disabled', 'disabled').removeAttr('required');
			}
		} else {
			input.removeAttr('disabled').attr('required', 'required');
		}
	});
});
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