<?php
/*
Template Name: Home Page
*/

get_header(); ?>

<div class="jumbotron homejumbo">
		<div class="video-container">
        <div class="container title-container">
					<?php the_field('message'); ?>
				</div>
        <video autoplay loop class="fillWidth">
            <source src="<?php echo get_template_directory_uri(); ?>/video/etec.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.</video>
        <!--
<div class="poster hidden">
            <img src="<?php echo get_template_directory_uri(); ?>/images/etec-video-bg.jpg"/>
        </div>
-->
    </div>
	</div>

	<div class="container" id="maincontent">
		<div class="row">
			<div class="col-lg-12 homepage">
				<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
				?>
			</div>
	  </div>
  </div>
  
  <div class="container-fluid urgent">
	  <div><?php the_field('urgent'); ?></div>
	  <div class="check"><?php the_field('check'); ?></div>
  </div>
    
  <div class="container-fluid servicecontainer">
			<div class="container">
				<div class="col-lg-12 servicetitle">
						<h2><?php the_field('service_title'); ?></h2>
					</div>
			</div>
			<div class="container">
				<!-- tier 1 -->
				<div class="row">
				<div class="col-md-6">
					<div class="col-md-4">
						<?php the_field('service_icon_one'); ?>
					</div>
					<div class="col-md-8 services">
						<?php the_field('service_text_one'); ?>
					</div>	
				</div>
				<div class="col-md-6">
					<div class="col-md-4">
						<?php the_field('service_icon_two'); ?>
					</div>
					<div class="col-md-8 services">
						<?php the_field('service_text_two'); ?>
					</div>	
				</div>
				</div>
				<!-- tier 2 -->
				<div class="row">
				<div class="col-md-6">
					<div class="col-md-4">
						<?php the_field('service_icon_three'); ?>
					</div>
					<div class="col-md-8 services">
						<?php the_field('service_text_three'); ?>
					</div>	
				</div>
				<div class="col-md-6">
					<div class="col-md-4">
						<?php the_field('service_icon_four'); ?>
					</div>
					<div class="col-md-8 services">
						<?php the_field('service_text_four'); ?>
					</div>	
				</div>
				</div>
				<!-- tier 3 -->
				<div class="row">
				<div class="col-md-6">
					<div class="col-md-4">
						<?php the_field('service_icon_five'); ?>
					</div>
					<div class="col-md-8 services">
						<?php the_field('service_text_five'); ?>
					</div>	
				</div>
				<div class="col-md-6">
					<div class="col-md-4">
						<?php the_field('service_icon_six'); ?>
					</div>
					<div class="col-md-8 services">
						<?php the_field('service_text_six'); ?>
					</div>	
				</div>
				</div>
				<!-- tier 4 -->
				<div class="row">
				<div class="col-md-6">
					<div class="col-md-4">
						<?php the_field('service_icon_seven'); ?>
					</div>
					<div class="col-md-8 services">
						<?php the_field('service_text_seven'); ?>
					</div>	
				</div>
				<div class="col-md-6">
					<div class="col-md-4">
						<?php the_field('service_icon_eight'); ?>
					</div>
					<div class="col-md-8 services">
						<?php the_field('service_text_eight'); ?>
					</div>	
				</div>
				</div>
			</div>
	</div>
  
<?php get_footer(); ?>
