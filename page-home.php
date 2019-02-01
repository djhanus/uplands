<?php get_header();

	/* Template Name: Home */ ?>
	
		<div class="intro intro--padding">
			<div class="slider-intro">
				<div class="slider__clip">
					<div class="slider__slides">
						<div class="slider__slide">
							<div class="intro__inner" style="background-image: url('<?php echo get_field('section_one_slide_a_image')?>');">
								<div class="shell">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/map.png" alt="" class="intro__map" width="1044" height="646">
									<div class="intro__content">
										<figure style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/wood-left.png);"></figure>

										<div class="intro__content-inner">
											<h3>
												<?php echo get_field('section_one_slide_a_title')?>
											</h3>
											
											<p>
												<?php echo get_field('section_one_slide_a_text')?>
											</p>
											
											<h1>
												This is <span class="intro__medium">UPLANDS</span> <span class="intro__large">MADE</span>
											</h1>
										</div><!-- /.intro__content-inner -->
									</div><!-- /.intro__content -->
								</div><!-- /.shell -->
							</div><!-- /.intro__inner -->
						</div><!-- /.slider__slide -->

						<div class="slider__slide">
							<div class="intro__inner" style="background-image: url('<?php echo get_field('section_one_slide_b_image')?>');">
								<div class="shell">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/map.png" alt="" class="intro__map" width="1044" height="646">
									<div class="intro__content">
										<figure style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/wood-left.png);"></figure>

										<div class="intro__content-inner">
											<h3>
												<?php echo get_field('section_one_slide_b_title')?>
											</h3>
											
											<p>
												<?php echo get_field('section_one_slide_b_text')?>
											</p>
											
											<h1>
												This is <span class="intro__medium">UPLANDS</span> <span class="intro__large">MADE</span>
											</h1>
										</div><!-- /.intro__content-inner -->
									</div><!-- /.intro__content -->
								</div><!-- /.shell -->
							</div><!-- /.intro__inner -->
						</div><!-- /.slider__slide -->

						<div class="slider__slide">
							<div class="intro__inner" style="background-image: url('<?php echo get_field('section_one_slide_c_image')?>');">
								<div class="shell">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/map.png" alt="" class="intro__map" width="1044" height="646">
									<div class="intro__content">
										<figure style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/wood-left.png);"></figure>

										<div class="intro__content-inner">
											<h3>
												<?php echo get_field('section_one_slide_c_title')?>
											</h3>
											
											<p>
												<?php echo get_field('section_one_slide_c_text')?>
											</p>
											
											<h1>
												This is <span class="intro__medium">UPLANDS</span> <span class="intro__large">MADE</span>
											</h1>
										</div><!-- /.intro__content-inner -->
									</div><!-- /.intro__content -->
								</div><!-- /.shell -->
							</div><!-- /.intro__inner -->
						</div><!-- /.slider__slide -->
					</div><!-- /.slider__slides -->
				</div><!-- /.slider__clip -->
			</div><!-- /.slider -->
		</div><!-- /.intro -->

		<div class="section section--benefits decoration-dark decoration-bottom decoration-top">
			<div class="shell">
				<div class="section__cols">
					<div class="section__col section__col-1of3">
						<article class="article">
							<div class="article__image" style="background-image: url('<?php echo get_field('section_two_image_a')?>');"></div><!-- /.article__image -->
							
							<div class="article__head article__head--shrink">
								<h4 class="title">
									<?php echo get_field('section_two_title_a')?>
								</h4><!-- /.title -->
							</div><!-- /.article__head -->
							
							<div class="article__entry">
								<p>
									<?php echo get_field('section_two_text_a')?>
								</p>
							</div><!-- /.article__entry -->
							
							<div class="article__actions">
								<a href="#">
									Business in the Uplands
								</a>
							</div><!-- /.article__actions -->
						</article><!-- /.article -->
					</div><!-- /.section__col section__col-1of3 -->
					
					<div class="section__col section__col-1of3">
						<article class="article">
							<div class="article__image" style="background-image: url('<?php echo get_field('section_two_image_b')?>');"></div><!-- /.article__image -->
							
							<div class="article__head article__head--shrink">
								<h4 class="title">
									<?php echo get_field('section_two_title_b')?>
								</h4><!-- /.title -->
							</div><!-- /.article__head -->
							
							<div class="article__entry">
								<p>
									<?php echo get_field('section_two_text_b')?>
								</p>
							</div><!-- /.article__entry -->
							
							<div class="article__actions">
								<a href="#">
									Working in the Uplands
								</a>
							</div><!-- /.article__actions -->
						</article><!-- /.article -->
					</div><!-- /.section__col section__col-1of3 -->
					
					<div class="section__col section__col-1of3">
						<article class="article">
							<div class="article__image" style="background-image: url('<?php echo get_field('section_two_image_c')?>');"></div><!-- /.article__image -->
							
							<div class="article__head article__head--shrink">
								<h4 class="title">
									<?php echo get_field('section_two_title_c')?>
								</h4><!-- /.title -->
							</div><!-- /.article__head -->
							
							<div class="article__entry">
								<p>
									<?php echo get_field('section_two_text_c')?> 
								</p>
							</div><!-- /.article__entry -->
							
							<div class="article__actions">
								<a href="#">
									Living in the Uplands
								</a>
							</div><!-- /.article__actions -->
						</article><!-- /.article -->
					</div><!-- /.section__col section__col-1of3 -->
				</div><!-- /.section__cols -->
			</div><!-- /.shell -->
		</div><!-- /.section-benefits -->

		<section class="section section--innovations">
			<div class="shell">
				<header class="section__head">
					<h2>
						Innovations in the Uplands
					</h2>
				</header><!-- /.section__head -->

				<div class="section__body">
					<div class="slider-innovations">
						<div class="slider__clip">
							<div class="slider__slides">
								<div class="slider__slide">
									<article class="article">
										<div class="article__media">
											<iframe width="1280" height="720" src="https://www.youtube.com/embed/NpEaa2P7qZI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
										</div><!-- /.article__media -->

										<header class="article__head">
											<h5>
												lorem ipsum: Praesent orci mauris
											</h5>
											
											<p>
												Suspendisse vitae felis ut purus consequat auctor id et libero.
											</p>
										</header><!-- /.article__head -->
									</article><!-- /.article -->
								</div><!-- /.slider__slide -->

								<div class="slider__slide">
									<article class="article">
										<div class="article__media">
											<iframe width="1280" height="720" src="https://www.youtube.com/embed/NpEaa2P7qZI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
										</div><!-- /.article__media -->

										<header class="article__head">
											<h5>
												Donec porttitor: Nulla facilisi
											</h5>
											
											<p>
												Nunc sit amet vehicula diam. Pellentesque non felis felis.
											</p>
										</header><!-- /.article__head -->
									</article><!-- /.article -->
								</div><!-- /.slider__slide -->

								<div class="slider__slide">
									<article class="article">
										<div class="article__media">
											<iframe width="1280" height="720" src="https://www.youtube.com/embed/NpEaa2P7qZI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
										</div><!-- /.article__media -->

										<header class="article__head">
											<h5>
												Donec porttitor: Nulla facilisi
											</h5>
											
											<p>
												Nunc sit amet vehicula diam. Pellentesque non felis felis.
											</p>
										</header><!-- /.article__head -->
									</article><!-- /.article -->
								</div><!-- /.slider__slide -->

								<div class="slider__slide">
									<article class="article">
										<div class="article__media">
											<iframe width="1280" height="720" src="https://www.youtube.com/embed/NpEaa2P7qZI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
										</div><!-- /.article__media -->

										<header class="article__head">
											<h5>
												Donec porttitor: Nulla facilisi
											</h5>
											
											<p>
												Nunc sit amet vehicula diam. Pellentesque non felis felis.
											</p>
										</header><!-- /.article__head -->
									</article><!-- /.article -->
								</div><!-- /.slider__slide -->
							</div><!-- /.slider__slides -->
						</div><!-- /.slider__clip -->
					</div><!-- /.slider -->
				</div><!-- /.section__body -->
			</div><!-- /.shell -->
		</section><!-- /.section section-/-innovations -->

		<section class="section section--news">
			<div class="shell">
				<header class="section__head">
					<h2>
						News & Features
					</h2>
				</header><!-- /.section__head -->

				<div class="section__body">
					<div class="slider-news">
						<div class="slider__clip">
							<div class="slider__slides">
								<div class="slider__slide">
									<div class="tile" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/woman-painting.jpg);">
										<div class="tile__inner" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/wood-left-normal.png);">
											<div class="tile__content">
												<article class="article">
													<header class="article__head article__head--shrink">
														<h3 class="title">
															Brownstown Fund for the Arts
														</h3><!-- /.title -->
													</header><!-- /.article__head -->

													<div class="article__entry">

														<p>
															We don’t just create; we celebrate. Experience artisans displaying their canvases while teaching painting classes, local musicians performing community concerts, and chefs training Uplanders of all ages in the culinary arts. Through the Brownstown Fund for the Arts, Uplanders get a taste (or two) of artist-business partnerships, local expositions, and a sampling of all the wonder that is Uplands Made.
														</p>
													</div><!-- /.article__entry -->

													<div class="article__actions">
														<a href="#" class="link-more">
															Learn More
														</a>
													</div><!-- /.article__actions -->
												</article><!-- /.article -->
											</div><!-- /.tile__content -->
										</div><!-- /.tile__inner -->
									</div><!-- /.tile -->
								</div><!-- /.slider__slide -->

								<div class="slider__slide">
									<div class="tile" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/engines.jpg);">
										<div class="tile__inner" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/wood-right-normal.png);">
											<div class="tile__content">
												<article class="article">
													<header class="article__head article__head--shrink">
														<h3 class="title">
															Jasper Engines
														</h3><!-- /.title -->
													</header><!-- /.article__head -->

													<div class="article__entry">

														<p>
															Since 1942, Jasper Engines has developed nation-leading technologies for remanufacturing auto parts. Then and now, the resources, landscape, and tenacity of workers in the Uplands put Jasper Engines at the head of the pack, growing through research and development while maintaining its local roots.
														</p>
													</div><!-- /.article__entry -->

													<div class="article__actions">
														<a href="#" class="link-more">
															Learn More
														</a>
													</div><!-- /.article__actions -->
												</article><!-- /.article -->
											</div><!-- /.tile__content -->
										</div><!-- /.tile__inner -->
									</div><!-- /.tile -->
								</div><!-- /.slider__slide -->

								<div class="slider__slide">
									<div class="tile" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/woman-painting.jpg);">
										<div class="tile__inner" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/wood-left-normal.png);">
											<div class="tile__content">
												<article class="article">
													<header class="article__head article__head--shrink">
														<h3 class="title">
															Brownstown Fund for the Arts
														</h3><!-- /.title -->
													</header><!-- /.article__head -->

													<div class="article__entry">

														<p>
															We don’t just create; we celebrate. Experience artisans displaying their canvases while teaching painting classes, local musicians performing community concerts, and chefs training Uplanders of all ages in the culinary arts. Through the Brownstown Fund for the Arts, Uplanders get a taste (or two) of artist-business partnerships, local expositions, and a sampling of all the wonder that is Uplands Made.
														</p>
													</div><!-- /.article__entry -->

													<div class="article__actions">
														<a href="#" class="link-more">
															Learn More
														</a>
													</div><!-- /.article__actions -->
												</article><!-- /.article -->
											</div><!-- /.tile__content -->
										</div><!-- /.tile__inner -->
									</div><!-- /.tile -->
								</div><!-- /.slider__slide -->

								<div class="slider__slide">
									<div class="tile" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/woman-painting.jpg);">
										<div class="tile__inner" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/wood-left-normal.png);">
											<div class="tile__content">
												<article class="article">
													<header class="article__head article__head--shrink">
														<h3 class="title">
															Brownstown Fund for the Arts
														</h3><!-- /.title -->
													</header><!-- /.article__head -->

													<div class="article__entry">

														<p>
															We don’t just create; we celebrate. Experience artisans displaying their canvases while teaching painting classes, local musicians performing community concerts, and chefs training Uplanders of all ages in the culinary arts. Through the Brownstown Fund for the Arts, Uplanders get a taste (or two) of artist-business partnerships, local expositions, and a sampling of all the wonder that is Uplands Made.
														</p>
													</div><!-- /.article__entry -->

													<div class="article__actions">
														<a href="#" class="link-more">
															Learn More
														</a>
													</div><!-- /.article__actions -->
												</article><!-- /.article -->
											</div><!-- /.tile__content -->
										</div><!-- /.tile__inner -->
									</div><!-- /.tile -->
								</div><!-- /.slider__slide -->
							</div><!-- /.slider__slides -->
						</div><!-- /.slider__clip -->
					</div><!-- /.slider -->
				</div><!-- /.section__content -->
			</div><!-- /.shell -->
		</section><!-- /.section section-/-news -->

		<div class="section-location" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/location.jpg');">
			<div class="shell">
				<div class="section__inner">
					<div class="section__content">
						 <article class="article">
						 	<header class="article__head article__head--shrink">
						 		<h4 class="title">
						 			<?php echo get_field('section_three_title')?>
						 		</h4><!-- /.title -->
						 	</header><!-- /.article__head -->

						 	<div class="article__entry">
						 		<p>
						 			<?php echo get_field('section_three_text')?>
						 		</p>
						 	</div><!-- /.article__entry -->

						 	<div class="article__actions">
						 		<a href="#" class="link-more">
						 			Getting here
						 		</a>
						 	</div><!-- /.article__actions -->
						 </article><!-- /.article -->
					</div><!-- /.section__content -->
				</div><!-- /.section__inner -->
			</div><!-- /.shell -->
		</div><!-- /.section-location -->

		<section class="section section--uplands">
			<div class="shell">
				<header class="section__head">
					<h2>
						What's on in the uplands
					</h2>
				</header><!-- /.section__head -->

				<div class="section__body">
					<div class="section__cols">
						<div class="section__col section__col-1of4">
							<article class="article article--small">
								<div class="article__image" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/market.jpg);"></div><!-- /.article__image -->
								
								<header class="article__head">
									<h5>
										Farmers’ Markets 
									</h5>
								</header><!-- /.article__head -->
								
								<div class="article__entry">
									<p>
										Local crafts, local food, local investment. Farm to finesse, this is Uplands Made.
									</p>
								</div><!-- /.article__entry -->
							</article><!-- /.article -->
						</div><!-- /.section__col section__col-1of4 -->
						
						<div class="section__col section__col-1of4">
							<article class="article article--small">
								<div class="article__image" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/microphone.jpg);"></div><!-- /.article__image -->
								
								<header class="article__head">
									<h5>
										Bloomington Blues and Boogie Woogie Piano Festival
									</h5>
								</header><!-- /.article__head -->
								
								<div class="article__entry">
									<p>
										Local musicians and eateries collaborate for this weekend of art and education.
									</p>
								</div><!-- /.article__entry -->
								
								<div class="article__actions">
									<a href="#" class="link-more">
										Learn More
									</a>
								</div><!-- /.article__actions -->
							</article><!-- /.article -->
						</div><!-- /.section__col section__col-1of4 -->
						
						<div class="section__col section__col-1of4">
							<article class="article article--small">
								<div class="article__image" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/baloon.jpg);"></div><!-- /.article__image -->
								
								<header class="article__head">
									<h5>
										Kiwanis Club of South Central Indiana
									</h5>
								</header><!-- /.article__head -->
								
								<div class="article__entry">
									<p>
										 Find yourself on your way UP in the Uplands at our annual Balloon Fest.
									</p>
								</div><!-- /.article__entry -->
								
								<div class="article__actions">
									<a href="#" class="link-more">
										Learn More
									</a>
								</div><!-- /.article__actions -->
							</article><!-- /.article -->
						</div><!-- /.section__col section__col-1of4 -->
						
						<div class="section__col section__col-1of4">
							<article class="article article--small">
								<div class="article__image" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/guitar.jpg);"></div><!-- /.article__image -->
								
								<header class="article__head">
									<h5>
										Music in the Park
									</h5>
								</header><!-- /.article__head -->
								
								<div class="article__entry">
									<p>
										Join a public space turned creative place on breezy summer nights.
									</p>
								</div><!-- /.article__entry -->
							</article><!-- /.article -->
						</div><!-- /.section__col section__col-1of4 -->
					</div><!-- /.section__cols -->
				</div><!-- /.section__body -->
			</div><!-- /.shell -->
		</section><!-- /.section section-/-uplands -->

<?php get_footer(); ?>
