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
								<div class="tile" style="background-image: url(<?php echo get_field('news_feature_1_image','options'); ?>);">
									<div class="tile__inner" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/wood-left-normal.png);">
										<div class="tile__content">
											<article class="article">
												<header class="article__head article__head--shrink">
													<h3 class="title">
														<?php echo get_field('news_feature_1_title','options'); ?>
													</h3><!-- /.title -->
												</header><!-- /.article__head -->

												<div class="article__entry">

													<p>
														<?php echo get_field('news_feature_1_text','options'); ?>
													</p>
												</div><!-- /.article__entry -->

												<div class="article__actions">
													<a href="<?php echo get_field('news_feature_1_link','options'); ?>" class="link-more">
														Learn More
													</a>
												</div><!-- /.article__actions -->
											</article><!-- /.article -->
										</div><!-- /.tile__content -->
									</div><!-- /.tile__inner -->
								</div><!-- /.tile -->
							</div><!-- /.section__col -->
							
							<div class="section__col">
								<div class="tile" style="background-image: url(<?php echo get_field('news_feature_2_image','options'); ?>);">
									<div class="tile__inner" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/wood-right-normal.png);">
										<div class="tile__content">
											<article class="article">
												<header class="article__head article__head--shrink">
													<h3 class="title">
														<?php echo get_field('news_feature_2_title','options'); ?>
													</h3><!-- /.title -->
												</header><!-- /.article__head -->

												<div class="article__entry">

													<p>
														<?php echo get_field('news_feature_2_text','options'); ?>
													</p>
												</div><!-- /.article__entry -->

												<div class="article__actions">
													<a href="<?php echo get_field('news_feature_2_link','options'); ?>" class="link-more">
														Learn More
													</a>
												</div><!-- /.article__actions -->
											</article><!-- /.article -->
										</div><!-- /.tile__content -->
									</div><!-- /.tile__inner -->
								</div><!-- /.tile -->
							</div><!-- /.section__col -->
						</div><!-- /.section__cols -->
					</div><!-- /.section__row -->

					<div class="section__row">
						<div class="section__cols">
							<div class="section__col">
								<div class="tile" style="background-image: url(<?php echo get_field('news_feature_3_image','options'); ?>);">
									<div class="tile__inner" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/wood-left-normal.png);">
										<div class="tile__content">
											<article class="article">
												<header class="article__head article__head--shrink">
													<h3 class="title">
														<?php echo get_field('news_feature_3_title','options'); ?>
													</h3><!-- /.title -->
												</header><!-- /.article__head -->

												<div class="article__entry">

													<p>
														<?php echo get_field('news_feature_3_text','options'); ?>
													</p>
												</div><!-- /.article__entry -->

												<div class="article__actions">
													<a href="<?php echo get_field('news_feature_3_link','options'); ?>" class="link-more">
														Learn More
													</a>
												</div><!-- /.article__actions -->
											</article><!-- /.article -->
										</div><!-- /.tile__content -->
									</div><!-- /.tile__inner -->
								</div><!-- /.tile -->
							</div><!-- /.section__col -->
							
							<div class="section__col">
								<div class="tile" style="background-image: url(<?php echo get_field('news_feature_4_image','options'); ?>);">
									<div class="tile__inner" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/wood-right-normal.png);">
										<div class="tile__content">
											<article class="article">
												<header class="article__head article__head--shrink">
													<h3 class="title">
														<?php echo get_field('news_feature_4_title','options'); ?>
													</h3><!-- /.title -->
												</header><!-- /.article__head -->

												<div class="article__entry">

													<p>
														<?php echo get_field('news_feature_4_text','options'); ?>
													</p>
												</div><!-- /.article__entry -->

												<div class="article__actions">
													<a href="<?php echo get_field('news_feature_4_link','options'); ?>" class="link-more">
														Learn More
													</a>
												</div><!-- /.article__actions -->
											</article><!-- /.article -->
										</div><!-- /.tile__content -->
									</div><!-- /.tile__inner -->
								</div><!-- /.tile -->
							</div><!-- /.section__col -->
						</div><!-- /.section__cols -->
					</div><!-- /.section__row -->
				</div><!-- /.section__body -->
			</div><!-- /.shell -->
		</div><!-- /.section-tiles -->

<?php get_footer(); ?>