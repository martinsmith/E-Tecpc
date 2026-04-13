<?php ?>
	<div class="container-fluid testimonials">
  	<div class="row">
  		<div class="container">
				<div class="col-lg-12 servicetitle">
						<h2>TESTIMONIALS</h2>
					</div>
			</div>
  		<div class="container">
  			<div class="col-lg-6">
	  			<?php
						if(is_active_sidebar('sidebar-8')){
						dynamic_sidebar('sidebar-8');
						}
					?>
  			</div>
				<div class="col-lg-6">
					<?php
						if(is_active_sidebar('sidebar-9')){
						dynamic_sidebar('sidebar-9');
						}
					?>
				</div>
				<!--
<div class="col-lg-4">
					<?php
						if(is_active_sidebar('sidebar-10')){
						dynamic_sidebar('sidebar-10');
						}
					?>
				</div>
-->
  		</div>
  	</div>
  </div>
  
	<div class="container-fluid clients">
	 <?php
			if(is_active_sidebar('sidebar-11')){
			dynamic_sidebar('sidebar-11');
			}
	 ?>
  </div>
	
	<footer class="container-fluid" id="deepfooter">
			<div class="container">
				<div class="col-sm-4" id="leftfooter">
					<?php
						if(is_active_sidebar('sidebar-4')){
						dynamic_sidebar('sidebar-4');
						}
					?>	
				</div>
				<div class="col-sm-4" id="middlefooter">
					<?php
						if(is_active_sidebar('sidebar-5')){
						dynamic_sidebar('sidebar-5');
						}
					?>
				</div>
				<div class="col-sm-4" id="rightfooter">
					<?php
						if(is_active_sidebar('sidebar-6')){
						dynamic_sidebar('sidebar-6');
						}
					?>
				</div>
			</div>
			<div class="row" id="copyright">
					<div class="col-lg-12" >
						<p>All content is copyright e-tec Computer Services <?php echo ''.date('Y').'';?> // <a href="/privacy-cookie-policy">Privacy & Cookie Policy</a> // We are <a href="https://mechanised.co.uk" target="_blank">Mechanised</a></p>
						<?php
						if(is_active_sidebar('sidebar-12')){
						dynamic_sidebar('sidebar-12');
						}
					?>
				</div>
			</div>
		</footer>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="jquery.min.js"><\/script>')</script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/ie10-viewport-bug-workaround.js"></script>
		<?php wp_footer(); ?>
</body>
</html>