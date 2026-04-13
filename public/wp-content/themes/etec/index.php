<?php

get_header(); ?>

<div class="jumbotron" id="internaljumbo">
		<div class="container">
			<h1>NEWS</h1>
		</div>
	</div>

	<div class="container" id="maincontent">
		<div class="row">
			<div class="col-lg-9">
				<?php
			if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

				endwhile;
				// Previous/next post navigation.
				twentyfourteen_paging_nav();

			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;
		?>
			</div>
			<div class="col-lg-3">
				<?php get_sidebar(); ?>
			</div>
	  </div>
  </div>
  
  
<?php get_footer(); ?>

