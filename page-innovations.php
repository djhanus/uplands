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

		<div class="section-media-main decoration-bottom decoration-top decoration-dark" style="display: none;">
			<div class="shell">
				<div class="section__body">
					<article class="article-media article-media--alt">
						<div class="article__video">
							<div class="video-default">
								<video data-ckin="compact" poster="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/video-poster.jpg" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/videos/placeholder.mp4"></video>
							</div><!-- /.video-default -->
						</div><!-- /.article__video -->

						<div class="article__body">
							<header class="article__head">
								<h3 class="title">
									<?php echo get_field('regional_video_title'); ?>
								</h3><!-- /.title -->
							</header><!-- /.article__head -->

							<div class="article__entry">
								<p>
									<?php echo get_field('regional_video_text'); ?>
								</p>
							</div><!-- /.article__entry -->
						</div><!-- /.article__body -->
					</article><!-- /.article-media -->
				</div><!-- /.section__body -->
			</div><!-- /.shell -->
		</div><!-- /.section-media-main -->

		<div class="section-media" style="display: none;">
			<div class="shell">
				<div class="section__body">
					<div class="section__row">
						<div class="section__cols">
							<div class="section__col">
								<article class="article-media article-media--small">
									<div class="article__video">
										<iframe width="1280" height="720" src="<?php echo get_field('video_1_url'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
									</div><!-- /.article__video -->

									<div class="article__body">
										<header class="article__head">
											<h3 class="title">
												<?php echo get_field('video_1_title'); ?>
											</h3><!-- /.title -->
										</header><!-- /.article__head -->

										<div class="article__entry">
											<p>
												<?php echo get_field('video_1_text'); ?>
											</p>
										</div><!-- /.article__entry -->
									</div><!-- /.article__body -->
								</article><!-- /.article-media -->
							</div><!-- /.section__col -->

							<div class="section__col">
								<article class="article-media article-media--small">
									<div class="article__video">
										<iframe width="1280" height="720" src="<?php echo get_field('video_2_url'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
									</div><!-- /.article__video -->

									<div class="article__body">
										<header class="article__head">
											<h3 class="title">
												<?php echo get_field('video_2_title'); ?>
											</h3><!-- /.title -->
										</header><!-- /.article__head -->

										<div class="article__entry">
											<p>
												<?php echo get_field('video_2_text'); ?>
											</p>
										</div><!-- /.article__entry -->
									</div><!-- /.article__body -->
								</article><!-- /.article-media -->
							</div><!-- /.section__col -->
						</div><!-- /.section__cols -->
					</div><!-- /.section__row -->

					<div class="section__row">
						<div class="section__cols">
							<div class="section__col">
								<article class="article-media article-media--small">
									<div class="article__video">
										<iframe width="1280" height="720" src="<?php echo get_field('video_3_url'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
									</div><!-- /.article__video -->

									<div class="article__body">
										<header class="article__head">
											<h3 class="title">
												<?php echo get_field('video_3_title'); ?>
											</h3><!-- /.title -->
										</header><!-- /.article__head -->

										<div class="article__entry">
											<p>
												<?php echo get_field('video_3_text'); ?>
											</p>
										</div><!-- /.article__entry -->
									</div><!-- /.article__body -->
								</article><!-- /.article-media -->
							</div><!-- /.section__col -->

							<div class="section__col">
								<article class="article-media article-media--small">
									<div class="article__video">
										<iframe width="1280" height="720" src="<?php echo get_field('video_4_url'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
									</div><!-- /.article__video -->

									<div class="article__body">
										<header class="article__head">
											<h3 class="title">
												<?php echo get_field('video_4_title'); ?>
											</h3><!-- /.title -->
										</header><!-- /.article__head -->

										<div class="article__entry">
											<p>
												<?php echo get_field('video_4_text'); ?>
											</p>
										</div><!-- /.article__entry -->
									</div><!-- /.article__body -->
								</article><!-- /.article-media -->
							</div><!-- /.section__col -->
						</div><!-- /.section__cols -->
					</div><!-- /.section__row -->
				</div><!-- /.section__body -->
			</div><!-- /.shell -->
		</div><!-- /.section-media -->

<?php get_footer(); ?>

