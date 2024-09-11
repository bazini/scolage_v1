var url = window.location.origin, lg = $("html").attr("lang"), ajaxUrl = url+"/index.php/ajax/";
jQuery(document).ready(function($) {
	// Scroller les tâches jusq'à la fin
	$(".taf").scrollTop($('.taf')[0].scrollHeight);
	// Quand on clique sur envoyer les données de TAF
	$("#todo-form").submit(function(e) {
		e.preventDefault();
		var ld = `
			<div class="overlay">
        <i class="fas fa-2x fa-sync-alt fa-spin"></i>
      </div>
		`;
		var c = $(this), text = c.find(".input-taf").val(), taf = $.trim(text), id = c.find("#id").val(), edit = c.find(".edit-taf input").val(), ed = (edit != undefined)?edit:"";
		if (taf.length > 0) {
			$("#taf").append(ld);
			$.post(ajaxUrl+"set-taf", {id: id, msg: taf, edit: ed}, function(data, textStatus, xhr) {
				$("#taf").find(".overlay").remove();
				if (!data.error) {
					$(".taf").html(data.data);
					$(".taf").scrollTop($('.taf')[0].scrollHeight);
					$(".input-taf").val('');
					$(".edit-taf").html('');
				} else {
					info("danger", data.ermsg);
				}
			}, "JSON");
		}
	});
	// Fermer une TAF
	$("#taf").on("click", ".close-taf", function(e) {
		//e.preventDefault();
		var c = $(this), id = c.data("id"), user = $("#id").val();
		var ld = `
			<div class="overlay">
        <i class="fas fa-2x fa-sync-alt fa-spin"></i>
      </div>
		`;
		$("#taf").append(ld);
		$.post(ajaxUrl+"delete-taf", {id: user, taf: id}, function(data, textStatus, xhr) {
			$("#taf").find(".overlay").remove();
			if (!data.error) {
				$(".taf").html(data.data);
				$(".taf").scrollTop($('.taf')[0].scrollHeight);
			} else {
				info("danger", data.ermsg);
			}
		}, "JSON");
	});
});
// Editer une TAF
function editTaf(msg, id) {
	$(".input-taf").val(msg);
	$(".edit-taf").html(`
		<input type="hidden" id="edit-taf" value="${id}" />
	`);
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