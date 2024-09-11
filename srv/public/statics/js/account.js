jQuery(document).ready(function($) {
	// Vérification des infos de connexion
	/*$(".loginForm").submit(function(e) {
		e.preventDefault();
		var c = $(this), name = c.find('[name=name]').val(), mdp = c.find('[name=mdp]').val();
		if (name && mdp) {
			window.moveTo(0, 0);
			window.resizeTo(screen.width, screen.height)
		}
	});*/
	/**
	 * Toggle show password
	 */
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
});