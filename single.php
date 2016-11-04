<?php
get_header();
?>


<div id="content">

	<div class="left">
		
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
		<div class="podpis"></div>
		<div class="clear-ex"></div>
		<ul class="social">
			<li class="fb">
				<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>"
				   onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
				   target="_blank" title="<?php _e('Share on Facebook', 'maria'); ?>">
				</a>
			</li>
			<li class="tw">
				<a href="https://twitter.com/share?url=<?php echo urlencode(get_permalink()); ?>"
				   onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
				   target="_blank" title="<?php _e('Share on Twitter', 'maria'); ?>">
				</a>
			</li>
			<li class="pn">
				<a href="http://pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink()); ?>"
				   onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=350,width=480');return false;"
				   target="_blank" title="<?php _e('Share on Pinterest', 'maria'); ?>">
				</a>
			</li>
			<li class="gp">
				<a href="https://plus.google.com/share?url=<?php echo urlencode(get_permalink()); ?>"
				   onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=350,width=480');return false;"
				   target="_blank" title="<?php _e('Share on Google+', 'maria'); ?>">
				</a>
			</li>
			<li class="gm">
			<a href="https://mail.google.com/mail/u/0/#inbox<?php echo urlencode(get_permalink()); ?>"
				   onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
				   target="_blank"title="<?php _e('Gmail', 'maria'); ?>">
				   </a>
				   </li>
			<li class="in"><a href="#" onclick="window.print();" title="<?php _e('Print', 'maria'); ?>"></a></li>
		</ul>
		<div class="clear"></div>
	</div>


	<div class="right">
		<?php
		if (has_post_thumbnail())
		{
			?>
			<div class="container-image">
				<?php
				$img_src = wp_get_attachment_image_url( get_post_thumbnail_id(), 'post-thumbnail' );
				$img_srcset = wp_get_attachment_image_srcset( get_post_thumbnail_id(), 'post-thumbnail' );
				$alt = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
				?>
				<img src="<?php echo esc_url( $img_src ); ?>"
					 srcset="<?php echo esc_attr( $img_srcset ); ?>"
					 sizes="(max-width: 405px) 100vw, 405px" alt="<?php echo $alt; ?>"/>
				<?php echo get_post(get_post_thumbnail_id())->post_content; ?>
			</div>
			<div class="clear"></div>
			<?php 
		}
		
		wp_nav_menu(array(
			'theme_location'=>"right",
			'container_class'=>"container-image",
			'menu_class'=>"right-menu"
		)); 
		?>
	</div>
	<div class="clear"></div>
</div>
<div id="comments-block"><?php comments_template(); ?></div>
<?php
get_footer();
?>