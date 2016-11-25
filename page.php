<?php
get_header();



?>


<div class="second-part">
	<?php
	get_template_part('left_menu');
	?>
	
		
		<?php
		if (has_post_thumbnail())
		{
			?>
		
		<div class="generals">
		<?php 
		while (have_posts())
		{
			the_post(); 
			?>
			<h1><?php the_title(); ?></h1>
				<div class="containerImg">
				<?php
				$img_src = wp_get_attachment_image_url( get_post_thumbnail_id(), 'post-thumbnail' );
				$img_srcset = wp_get_attachment_image_srcset( get_post_thumbnail_id(), 'post-thumbnail' );
				$alt = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
				?>
				<img src="<?php echo esc_url( $img_src ); ?>"
					 srcset="<?php echo esc_attr( $img_srcset ); ?>"
					 sizes="(max-width: 100%) 100vh, 100%" alt="<?php echo $alt; ?>"/>
				<?php echo get_post(get_post_thumbnail_id())->post_content; ?>
			</div>
		
			<?php 
		}
		
		
		?>
		<div class="the_content">
			<?php
				the_content();
			
			
				

		}

	?>
		
</div>
		</div>




		

	</div>
	


<?php
get_footer();
?>