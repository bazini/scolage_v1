jQuery(document).ready(function($) {
	// Imprimer une DIV
	if (jQuery().print !== undefined) {
		$(".printthis").click(function(e) {
			var c = $(this), src = c.data("src"), style=c.data("style"), gs = (style == "1")?true:false, mediaprint=c.data("mediaprint"), mp = (mediaprint == "1")?true:false;
			$("."+src).print({
				globalStyles: gs,
				mediaPrint: mp,
			});
		});
	}
});