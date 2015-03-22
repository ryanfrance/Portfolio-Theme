<!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <?php get_header(); ?>

  	<div class="band">
  		<div class="container bulk">

			<!-- text -->
			<div class="row content">
				<!-- Lets start a loop then add dynamic posts from wordpress-->
				<?php

					if ( have_posts() ) : while ( have_posts() ) : the_post();

				?>
				<article>
					<div class="three columns">

							<div class="article-img u-pull-left"

								<figure>

									<!--Part one - Echo Thumbnail Image-->
									<a href="<?php the_permalink(); ?>">

									<?php

										if (function_exists('has_post_thumbnail') && has_post_thumbnail($post->ID)) {
											$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), full);

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

				<?php

				 	endwhile;
					else :

				?>

				<p>Sorry, nothing to show at the moment. Come back later!</p>

				<?php

					endif;

				?>

			</div>


		</div><!--end container-->
  	</div><!--end band-->

  	<?php get_footer(); ?>
