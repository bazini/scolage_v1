var url = window.location.origin, lg = $("html").attr("lang"), ajaxUrl = url+"/index.php/ajax/";
jQuery(document).ready(function($) {
	var bdy = $(".data-body");
	if (bdy !== undefined) {
		var href = bdy.data("href"), st = href, params=bdy.data("params");
		if (params !== undefined) {
			if (params.length > 0) {
				var dx = params.split(":");
				if (dx.length > 1) {
					p1 = buildParams(href, dx[0], st);
					p2 = dx[1]
					href = p1+":"+p2;
				} else {
					href = buildParams(href, params, st);
				}
			}
		}
		getData(ajaxUrl + href);
	}
});
function getData(href) {
	jQuery(document).ready(function($) {
		$('#dataTable').DataTable({
			"ajax": {
		    "url": href,
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
	});
}
function buildParams(href, params, st) {
	var prms = params.split(";"), p, ext, ex;
	for (var i = 0; i < prms.length; i++) {
		p = prms[i], ext = p.split("="), ex = ext[0] + "=" + ext[1];
		if (href == st) {
			href += "?" + ex;
		} else {
			href += "&" + ex;
		}
	}
	return href;
}