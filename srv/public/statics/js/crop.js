jQuery(document).ready(function($) {
	$(".crop-photo img").cropper({
		dragMode: 'crop',
		initialAspectRatio: 1/1,
		aspectRation: 1/1,
		viewMode: 2,
		dragMode: 'crop',
		scaleX: 1,
		scaleY: 1,
		crop: (event) => {
			const x = Math.round(event.detail.x);
			const y = Math.round(event.detail.y);
			const w = Math.round(event.detail.width);
			const h = Math.round(event.detail.height);
			$("#x").val(x);
			$("#y").val(y);
			$("#w").val(w);
			$("#h").val(h);
		},
		cropend: (e) => {
			e.target.cropper.setAspectRatio(1);
		}
	});
});