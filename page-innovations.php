<?php get_header();

	/* Template Name: Innovations */ ?>

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

		<div class="section-media-main decoration-bottom decoration-top decoration-dark">
			<div class="shell">
				<div class="section__body">
					<article class="article-media article-media--alt">
						<div class="article__video">
							<div class="video-default">
								<div class="embed-container">
									<?php the_field('regional_video_url','options'); ?>
								</div>
							</div><!-- /.video-default -->
						</div><!-- /.article__video -->

						<div class="article__body">
							<header class="article__head">
								<h3 class="title">
									<?php echo get_field('regional_video_title','options','options'); ?>
								</h3><!-- /.title -->
							</header><!-- /.article__head -->

							<div class="article__entry">
								<p>
									<?php echo get_field('regional_video_text','options'); ?>
								</p>
							</div><!-- /.article__entry -->
						</div><!-- /.article__body -->
					</article><!-- /.article-media -->
				</div><!-- /.section__body -->
			</div><!-- /.shell -->
		</div><!-- /.section-media-main -->

		<div class="section-media">
			<div class="shell">
				<div class="section__body">
					<div class="section__row">
						<div class="section__cols">
							<?php
							$news_args = array(
									'post_type'			=> 'Videos',
									'order'				=> 'DSC',
									//'posts_per_page'	=> '8',
									'post_status'		=> 'publish',
								);
								$news_query = new WP_Query($news_args);
								if ($news_query->have_posts()) : while($news_query->have_posts()) : $news_query->the_post();
							?>
							<div class="section__col">
								<article class="article-media article-media--small">
									<div class="article__video">
										<div class="embed-container">
											<?php echo get_field('featured_video'); ?>
										</div
									</div><!-- /.article__video -->

									<div class="article__body">
										<header class="article__head">
											<h3 class="title">
												<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
											</h3><!-- /.title -->
										</header><!-- /.article__head -->

										<div class="article__entry">
											<p>
												<?php the_content(); ?>
											</p>
										</div><!-- /.article__entry -->
									</div><!-- /.article__body -->
								</article><!-- /.article-media -->
							</div><!-- /.section__col -->
							<?php endwhile; endif; wp_reset_query(); ?>
						</div><!-- /.section__cols -->
					</div><!-- /.section__row -->
				</div><!-- /.section__body -->
			</div><!-- /.shell -->
		</div><!-- /.section-media -->

<?php get_footer(); ?>

