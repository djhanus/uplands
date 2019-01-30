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
						<div class="article__image" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/baloon-big.jpg);"></div><!-- /.article__image -->

						<div class="article__body">
							<header class="article__head">
								<h3 class="title">
									Kiwanis Club of South Central Indiana 
								</h3><!-- /.title -->
							</header><!-- /.article__head -->

							<div class="article__entry">
								<p>
									 Find yourself on your way UP in the Uplands at our annual Balloon Fest.
								</p>

								<p>
									<span>
										September 7-9
									</span>
									
									<span>
										2018
									</span>
									
									<span>
										Monroe County Fairgrounds
									</span>
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
							<div class="section__col">
								<article class="article-media article-media--small">
									<div class="article__image" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/market-big.jpg);"></div><!-- /.article__image -->

									<div class="article__body">
										<header class="article__head">
											<h3 class="title">
												Farmers’ Markets 
											</h3><!-- /.title -->
										</header><!-- /.article__head -->

										<div class="article__entry">
											<p>
												Local crafts, local food, local investment. Farm to finesse, this is Uplands Made.
											</p>

											<p>
												<span>
													Every day of the week
												</span>
												
												<span>
													location varies
												</span>
											</p>
										</div><!-- /.article__entry -->
									</div><!-- /.article__body -->
								</article><!-- /.article-media -->
							</div><!-- /.section__col -->

							<div class="section__col">
								<article class="article-media article-media--small">
									<div class="article__image" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/talking-microphone.jpg);"></div><!-- /.article__image -->

									<div class="article__body">
										<header class="article__head">
											<h3 class="title">
												Bloomington Blues and Boogie Woogie Piano Festival
											</h3><!-- /.title -->
										</header><!-- /.article__head -->

										<div class="article__entry">
											<p>
												Local musicians and eateries collaborate for this weekend of art and education.
											</p>

											<p>
												<span>
													August 11-13 ,  2018
												</span>
												
												<span>
													Ivy Tech John Waldron Arts Center
												</span>
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
									<div class="article__image" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/theatre.jpg);"></div><!-- /.article__image -->

									<div class="article__body">
										<header class="article__head">
											<h3 class="title">
												Tivoli Theatre 
											</h3><!-- /.title -->
										</header><!-- /.article__head -->

										<div class="article__entry">
											<p>
												Catch new films and local productions at Tivoli Theatre, a ’20s-era restored entertainment hall.
											</p>

											<p>
												<span>24 N. Washington Street, Spencer, Indiana</span>
											</p>
										</div><!-- /.article__entry -->
									</div><!-- /.article__body -->
								</article><!-- /.article-media -->
							</div><!-- /.section__col -->

							<div class="section__col">
								<article class="article-media article-media--small">
									<div class="article__image" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/guitar-music.jpg);"></div><!-- /.article__image -->

									<div class="article__body">
										<header class="article__head">
											<h3 class="title">
												Music in the Park 
											</h3><!-- /.title -->
										</header><!-- /.article__head -->

										<div class="article__entry">
											<p>
												Join a public space turned creative place on breezy summer nights.  
											</p>

											<p>
												<span>Dates and locations vary</span>
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
