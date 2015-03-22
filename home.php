<!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <?php get_header(); ?>

  	<div class="band">
  		<div class="container bulk">

  			<div class="row">
	  			<div class="offset-by-one column nine columns">

		  			<!--This will call the flex slider ryanfrance plugin and echo the markup into something which is familiar to below -->
		  			<?php fsr_slider(); ?>

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
				<!-- Lets start a loop then add dynamic posts from wordpress-->
				<?php

					if ( have_posts() ) : while ( have_posts() ) : the_post();

				?>
						<div class="row content">

							<article>

								<div class="three columns">

									<div class="article-img u-pull-left"

										<figure>

											<!--Part one - Echo Thumbnail Image-->
											<a href="<?php the_permalink(); ?>">

											<?php

												if (function_exists('has_post_thumbnail') && has_post_thumbnail($post->ID)) {
													$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');

											?>
													<img src="<?php echo $thumbnail[0]; ?>" alt="" />

											<?php

												} //end if

											 	else {

											?>
													<img src="<?php get_template_directory_uri(); ?>'/images/noimage.jpg" alt="No Image Available" />
											<?php

												}

											?>

											</a><!--End permalink-->

										</figure>

									</div>

								</div>

								<div class="nine columns">

									<div class="article-sum u-pull-left">

										<p class="crumbs"><a href="#"><?php the_category(' &gt; '); ?></a></p>

										<!--Part two - Echo Article Title-->
										<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

										<!--Echo Author-->
										<p class="meta"><?php the_author_posts_link(); echo " "; the_time("F, Y"); echo " "; comments_popup_link("0 Comments", "1 Comment", "% Comments"); ?></p>
										<!--Echo Summary-->
										<?php the_content(); ?>

										<hr />

									</div>

								</div>

							</article>

						</div>

				<?php

				 	endwhile;
					else :

				?>

				<p>Sorry, nothing to show at the moment. Come back later!</p>

				<?php

					endif;

				?>

				<div class="row">

					<div class="twelve columns u-full-width"

						<nav class="paginate">

							<?php

								/*global $wp_query;

								$total_pages = $wp_query -> max_num_pages;

								if ($total_pages > 1) {
									$current_page = max(1, get_query_var('paged'));

									echo paginate_links(array(
										'base'		=> get_pagenum_link(1) . '%_%',
										'format'	=> '?page=%#%',
										'current'	=> $current_page,
										'total'		=> $total_pages,
										'mid_size'	=> 3,
										'prev_next'	=> True,
										'prev_text'	=> __('<< Previous'),
										'next_text'	=> __('Next >>'),
									));
								}*/

								$args = ['query' => $q];

								echo get_paginated_numbers( )

							?>

						</nav>

					</div>

				</div>

			</div>


		</div><!--end container-->
  	</div><!--end band-->

  	<?php get_footer(); ?>
