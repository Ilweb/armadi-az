<?php
get_header();
?>
<div class="second-part">
	<div class="generals">
		<?php 
		while (have_posts())
		{
			the_post(); 
			?>
			<h1><?php the_title(); ?></h1>
			<?php
			the_content();
		}
		?>
	</div>
</div>
<?php
get_footer();
?>