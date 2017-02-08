<?php
get_header();

?>
<div class="centerPage">
	<div class="second-part">
		<div class="generals">
		<?php 
		while (have_posts())
		{
			the_post(); 
			?>
			<div class="image-container">
			<a href="<?php the_permalink(); ?>">
				<?php
				if (has_post_thumbnail())
				{
					$img_src = wp_get_attachment_image_url( get_post_thumbnail_id(), 'post-thumbnail' );
					$img_srcset = wp_get_attachment_image_srcset( get_post_thumbnail_id(), 'post-thumbnail' );
					$alt = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
					?>
					<div class="containerImg">
						<img src="<?php echo esc_url( $img_src ); ?>"
							 srcset="<?php echo esc_attr( $img_srcset ); ?>"
							 sizes="(max-width: 100%) 100vh, 100%" alt="<?php echo $alt; ?>"/>
						<div class="after"><h2><?php the_title(); ?></h2></div>
					</div>
					<?php 
				}
				else
				{
					?>
					<div class="alone"><h2><?php the_title(); ?></h2></div>
					<?php
				}
				?>
				</a>
			</div>
			<?php
		}
		?>
		
		</div>

	</div>
	
</div>
<?php
get_footer();
?>