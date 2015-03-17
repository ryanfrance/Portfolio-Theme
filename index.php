  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <?php get_header(); ?>

  	<div class="band">
  		<div class="container bulk">
  			
  			<div class="row">
	  			<div class="offset-by-one column ten columns">

					<div class="flexslider">
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
						</ul><!--end of slides-->
					</div><!--end of flexslider-->

				</div><!--end of slider-->
			</div>

			<!-- text -->
			<div class="row">
				<div class="seven columns section">
					<h2>Heading</h2>
					<p>Lorem ipsum dolor sit amet, vis utroque gloriatur voluptatibus id, detracto laboramus posidonium cu sit. Vis malorum iuvaret singulis eu, vis eu rebum fabulas. Mutat tollit id sea, utroque moderatius eum ei, pro facer mollis et. In nec duis platonem vituperatoribus, vix detracto delicata temporibus ea. Cu cum nonumy sadipscing, duo cu decore volutpat. Nobis cetero ei est, cu enim nemore tacimates mea, sit ex ipsum theophrastus definitiones.</p>
				</div>

				<!--Buttons-->
				<aside class="offset-by-one column four columns side">
					<div class="sub buttons">
					
					<?php 
						//use function to output wordpress dynamic widgets
						dynamic_sidebar('Home Aside');
					?>

					</div>
				</aside>
			</div>


		</div><!--end container-->
  	</div><!--end band-->

  	<?php get_footer(); ?>
