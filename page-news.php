<?php get_header();

	/* Template Name: News */ ?>
	
		<div class="intro intro--alt">
			<div class="intro__inner" style="background-image: url(<?php echo get_field('main_banner_image') ?>);">
				<div class="shell">
					<div class="intro__content">
						<figure style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/wood-left.png);"></figure>

						<div class="intro__content-inner">
							<h1>
								<?php echo get_field('main_banner_title') ?>
							</h1>

							<p>
								<?php echo get_field('main_banner_text') ?>
							</p>
						</div><!-- /.intro__content-inner -->
					</div><!-- /.intro__content -->
				</div><!-- /.shell -->
			</div><!-- /.intro__inner -->
		</div><!-- /.intro -->

		<div class="section-tiles">
			<div class="shell">
				<div class="section__body">
					<div class="section__row">
						<div class="section__cols">
							<div class="section__col">
							<!-- CALL OUTPUT FUNCTION -->
							 <?php
							      $news_args = array(
							        'post_type'       => 'post',
							        'order'           => 'DSC',
							        'posts_per_page'  => '6',
							        'post_status'     => 'publish',
							      );
							      $news_query  = new WP_Query( $news_args );
							      if($news_query->have_posts() ) : while ( $news_query->have_posts() ) : $news_query->the_post();
						        ?>

						        <!-- ECHO FORMAT -->
								
									<div class="tile" style="background-image: url(<?php echo get_field('featured_image'); ?>);">
										<div class="tile__inner" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/wood-left-normal.png);">
											<div class="tile__content">
												<article class="article">
													<header class="article__head article__head--shrink">
														<h3 class="title">
															<?php the_title(); ?>
														</h3><!-- /.title -->
													</header><!-- /.article__head -->

													<div class="article__entry">

														<p>
															<?php the_excerpt(); ?>
														</p>
													</div><!-- /.article__entry -->

													<div class="article__actions">
														<a href="<?php echo get_permalink(); ?>" class="link-more">
															Learn More
														</a>
													</div><!-- /.article__actions -->
												</article><!-- /.article -->
											</div><!-- /.tile__content -->
										</div><!-- /.tile__inner -->
									</div><!-- /.tile -->
								
						    <?php endwhile; endif; wp_reset_query(); ?>
						<!-- / END NEWS OUTPUT FUNCTION -->
						</div><!-- /.section__col -->
					</div><!-- /.section__row -->

					<div class="section__row">
						<div class="section__cols">

					</div><!-- /.section__row -->

					<div class="section__row">
						
							
						</div><!-- /.section__cols -->
					</div><!-- /.section__row -->
				</div><!-- /.section__body -->
			</div><!-- /.shell -->
		</div><!-- /.section-tiles -->

<?php get_footer(); ?>
