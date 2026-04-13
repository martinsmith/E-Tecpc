<?php
/*
Template Name: Internal Page
*/

get_header(); ?>

<div class="jumbotron" id="internaljumbo">
		<div class="container">
			<h1><?php the_field('message'); ?></h1>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-9" id="maincontent">
				<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'contentinternal', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
				?>
			</div>
			<div class="col-lg-3">
				<?php
						if(is_active_sidebar('sidebar-7')){
						dynamic_sidebar('sidebar-7');
						}
					?>
			</div>
	  </div>
  </div>
  
  
<?php get_footer(); ?>
