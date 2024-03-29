<?php

	global $avia_config, $more;

	/*
	 * get_header is a basic wordpress function, used to retrieve the header.php file in your theme directory.
	 */

	get_header();

			$title  = __('Blog - Latest News', 'avia_framework'); //default blog title
			$t_link = home_url('/');
			$t_sub = "";

			if(avia_get_option('frontpage') && $blogpage_id = avia_get_option('blogpage'))
			{
				$title 	= get_the_title($blogpage_id); //if the blog is attached to a page use this title
				$t_link = get_permalink($blogpage_id);
				$t_sub =  avia_post_meta($blogpage_id, 'subtitle');
			}

			if(!empty($blogpage_id) && get_post_meta($blogpage_id, 'header', true) != 'no') 
			{
				echo avia_title(array('heading'=>'strong', 'title' => $title, 'link' => $t_link, 'subtitle' => $t_sub));
			}
	?>



		<div class='container_wrap container_wrap_first main_color <?php avia_layout_class( 'main' ); ?>'>

			<div class='container template-blog '>

				<main class='content <?php avia_layout_class( 'content' ); ?> units' <?php avia_markup_helper(array('context' => 'content'));?>>

                



				<!--end content-->
				</main>

				<?php
				wp_reset_query();
				//get the sidebar
				$avia_config['currently_viewing'] = 'blog';
				if(is_front_page()) $avia_config['currently_viewing'] = "frontpage";
				get_sidebar();

				?>

			</div><!--end container-->

		</div><!-- close default .container_wrap element -->




<?php get_footer(); ?>
