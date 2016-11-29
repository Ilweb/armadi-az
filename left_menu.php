

<div class="sec_menu"><i class="fa fa-bars  fa-3x" aria-hidden="true"></i></div>
	<div class="left_menu">
		<?php
		wp_nav_menu( array(
		'theme_location'=>"secondary"
			
		)); 
		?>

	</div>

	
<script type="text/javascript">	

$('li.left_menu').click(function() {
	if ($(window).width() <= 1024)
	{
		$(this).parent().parent().find('.sub-menu:visible').fadeOut();
		$(this).parent().find('.sub-menu').fadeIn();
	}
});

jQuery(".sec_menu").click(function()
{
	jQuery(".left_menu").fadeToggle(1000);
	jQuery(".best-of-the-best").fadeToggle(1000);
});

</script>