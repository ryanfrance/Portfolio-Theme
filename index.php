  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <?php get_header(); ?>

  	<div class="band">
  		<div class="container bulk">

  			<div class="row">
	  			<div class="offset-by-one column nine columns">

		  			<!--This will call the flex slider ryanfrance plugin and echo the markup into something which is familiar to below -->

					<!--<div class="flexslider">
						<ul class="slides">
							<li>
								<figure>
									<img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/aida.png" alt="" />
								</figure>
							</li>

							<li>
								<figure>
									<img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/capd.png" alt="" />
								</figure>
							</li>

							<li>
								<figure>
									<img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/sdaf.png" alt="" />
								</figure>
							</li>

							<li>
								<figure>
									<img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/yr2.png" alt="" />
								</figure>
							</li>
						</ul> end of slides
					</div> end of flexslider-->

				</div><!--end of slider-->
			</div>

			<!-- text -->
			<div class="row">
				<div class="twelve columns section">
				
					<?php if (have_posts()) : while (have_posts()) : the_post();

						the_content();
						endwhile;
						endif;

<<<<<<< HEAD
=======
				<!--Buttons-->
				<aside class="offset-by-one column four columns side">
					<div class="sub">

					<?php
						//use function to output wordpress dynamic widgets
						dynamic_sidebar('Home Aside');
>>>>>>> origin/master
					?>

					<!--<h2>Heading</h2>
					<p>Lorem ipsum dolor sit amet, vis utroque gloriatur voluptatibus id, detracto laboramus posidonium cu sit. Vis malorum iuvaret singulis eu, vis eu rebum fabulas. Mutat tollit id sea, utroque moderatius eum ei, pro facer mollis et. In nec duis platonem vituperatoribus, vix detracto delicata temporibus ea. Cu cum nonumy sadipscing, duo cu decore volutpat. Nobis cetero ei est, cu enim nemore tacimates mea, sit ex ipsum theophrastus definitiones.</p>-->

				</div>

				<!--Buttons-->
				
			</div>


		</div><!--end container-->
  	</div><!--end band-->

  	<?php get_footer(); ?>