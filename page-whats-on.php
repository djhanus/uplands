<?php get_header();

	/* Template Name: What's On */ ?>

		<div class="intro intro--alt">
			<div class="intro__inner" style="background-image: url(<?php echo get_field('main_banner_image') ?>;">
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
					<article class="article-media">
						<div class="article__image" style="background-image: url(<?php echo get_field('featured_event_image') ?>);"></div><!-- /.article__image -->

						<div class="article__body">
							<header class="article__head">
								<h3 class="title">
									<?php echo get_field('featured_event_title') ?>
								</h3><!-- /.title -->
							</header><!-- /.article__head -->

							<div class="article__entry">
								<p>
									 <?php echo get_field('featured_event_description') ?>
								</p>

								<!-- <p>
									<span>
										<?php echo get_field('featured_event_date') ?>
									</span>

									<span>
										<?php echo get_field('featured_event_year') ?>
									</span>

									<span>
										<?php echo get_field('featured_event_location') ?>
									</span>
								</p>-->

								<p><a href="<?php echo get_field('featured_event_link_url') ?>" title="<?php echo get_field('featured_event_link_text') ?>"><?php echo get_field('featured_event_link_text') ?></a></p>
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
							<div class="section__col">
								<a href="<?php echo get_field('event_1_location_url', 'option'); ?>" target="_blank">
									<article class="article-media article-media--small">
										<div class="article__image" style="background-image: url(<?php echo get_field('event_1_image', 'option'); ?>);"></div><!-- /.article__image -->

										<div class="article__body">
											<header class="article__head">
												<h3 class="title">
													<?php echo get_field('event_1_title', 'option'); ?>
												</h3><!-- /.title -->
											</header><!-- /.article__head -->

											<div class="article__entry">
												<p>
													<?php echo get_field('event_1_description', 'option'); ?>
												</p>

												<p>
													<span>
														<?php echo get_field('event_1_date', 'option'); ?>
													</span>
												</p>
											</div><!-- /.article__entry -->
										</div><!-- /.article__body -->
									</article><!-- /.article-media -->
								</a>
							</div><!-- /.section__col -->

							<div class="section__col">
								<a href="<?php echo get_field('event_2_location_url', 'option'); ?>" target="_blank">
									<article class="article-media article-media--small">
										<div class="article__image" style="background-image: url(<?php echo get_field('event_2_image', 'option'); ?>);"></div><!-- /.article__image -->

										<div class="article__body">
											<header class="article__head">
												<h3 class="title">
													<?php echo get_field('event_2_title', 'option'); ?>
												</h3><!-- /.title -->
											</header><!-- /.article__head -->

											<div class="article__entry">
												<p>
													<?php echo get_field('event_2_description', 'option'); ?>
												</p>

												<p>
													<span>
														<?php echo get_field('event_2_date', 'option'); ?>
													</span>
												</p>
											</div><!-- /.article__entry -->
										</div><!-- /.article__body -->
									</article><!-- /.article-media -->
								</a>
							</div><!-- /.section__col -->
						</div><!-- /.section__cols -->
					</div><!-- /.section__row -->

					<div class="section__row">
						<div class="section__cols">
							<div class="section__col">
								<a href="<?php echo get_field('event_3_location_url', 'option'); ?>" target="_blank">
									<article class="article-media article-media--small">
										<div class="article__image" style="background-image: url(<?php echo get_field('event_3_image', 'option'); ?>);"></div><!-- /.article__image -->

										<div class="article__body">
											<header class="article__head">
												<h3 class="title">
													<?php echo get_field('event_3_title', 'option'); ?>
												</h3><!-- /.title -->
											</header><!-- /.article__head -->

											<div class="article__entry">
												<p>
													<?php echo get_field('event_3_description', 'option'); ?>
												</p>

												<p>
													<span>
														<?php echo get_field('event_3_date', 'option'); ?>
													</span>
												</p>
											</div><!-- /.article__entry -->
										</div><!-- /.article__body -->
									</article><!-- /.article-media -->
								</a>
							</div><!-- /.section__col -->

							<div class="section__col">
								<a href="<?php echo get_field('event_4_location_url', 'option'); ?>" target="_blank">
									<article class="article-media article-media--small">
										<div class="article__image" style="background-image: url(<?php echo get_field('event_4_image', 'option'); ?>);"></div><!-- /.article__image -->

										<div class="article__body">
											<header class="article__head">
												<h3 class="title">
													<?php echo get_field('event_4_title', 'option'); ?>
												</h3><!-- /.title -->
											</header><!-- /.article__head -->

											<div class="article__entry">
												<p>
													<?php echo get_field('event_4_description', 'option'); ?>
												</p>

												<p>
													<span>
														<?php echo get_field('event_4_date', 'option'); ?>
													</span>
												</p>
											</div><!-- /.article__entry -->
										</div><!-- /.article__body -->
									</article><!-- /.article-media -->
								</a>
							</div><!-- /.section__col -->
						</div><!-- /.section__cols -->
					</div><!-- /.section__row -->

					<div class="section__row">
						<div class="section__cols">
							<div class="section__col">
								<a href="<?php echo get_field('event_5_location_url', 'option'); ?>" target="_blank">
									<article class="article-media article-media--small">
										<div class="article__image" style="background-image: url(<?php echo get_field('event_5_image', 'option'); ?>);"></div><!-- /.article__image -->

										<div class="article__body">
											<header class="article__head">
												<h3 class="title">
													<?php echo get_field('event_5_title', 'option'); ?>
												</h3><!-- /.title -->
											</header><!-- /.article__head -->

											<div class="article__entry">
												<p>
													<?php echo get_field('event_5_description', 'option'); ?>
												</p>

												<p>
													<span>
														<?php echo get_field('event_5_date', 'option'); ?>
													</span>
												</p>
											</div><!-- /.article__entry -->
										</div><!-- /.article__body -->
									</article><!-- /.article-media -->
								</a>
							</div><!-- /.section__col -->

							<div class="section__col">
								<a href="<?php echo get_field('event_6_location_url', 'option'); ?>" target="_blank">
									<article class="article-media article-media--small">
										<div class="article__image" style="background-image: url(<?php echo get_field('event_6_image', 'option'); ?>);"></div><!-- /.article__image -->

										<div class="article__body">
											<header class="article__head">
												<h3 class="title">
													<?php echo get_field('event_6_title', 'option'); ?>
												</h3><!-- /.title -->
											</header><!-- /.article__head -->

											<div class="article__entry">
												<p>
													<?php echo get_field('event_6_description', 'option'); ?>
												</p>

												<p>
													<span>
														<?php echo get_field('event_6_date', 'option'); ?>
													</span>
												</p>
											</div><!-- /.article__entry -->
										</div><!-- /.article__body -->
									</article><!-- /.article-media -->
								</a>
							</div><!-- /.section__col -->
						</div><!-- /.section__cols -->
					</div><!-- /.section__row -->

				</div><!-- /.section__body -->
			</div><!-- /.shell -->
		</div><!-- /.section-media -->

<?php get_footer(); ?>
