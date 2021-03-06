<?php get_header();

/* Template Name: About */ ?>

		<div class="intro intro--alt">
			<div class="intro__inner" style="background-image: url('<?php echo get_field('main_banner_image') ?>');">
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

		<section class="section-counties" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/counties-bg.jpg);">
			<div class="shell">
				<header class="section__head">
					<h2 class="title">
						Our Counties
					</h2><!-- /.title -->

					<ul class="list-counties">
						<li>
							<a href="<?php echo get_field('owen_county', 'option')?>">
								<div class="list__image">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/yellow-1.png" alt="" width="64" height="66">
								</div><!-- /.list__image -->

								<div class="list__name">
									<p>
										Owen
									</p>
								</div><!-- /.list__name -->
							</a>
						</li>

						<li>
							<a href="<?php echo get_field('greene_county', 'option')?>">
								<div class="list__image">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/yellow-2.png" alt="" width="90" height="59">
								</div><!-- /.list__image -->

								<div class="list__name">
									<p>
										Greene
									</p>
								</div><!-- /.list__name -->
							</a>
						</li>

						<li>
							<a href="<?php echo get_field('monroe_county', 'option')?>">
								<div class="list__image">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/yellow-3.png" alt="" width="61" height="73">
								</div><!-- /.list__image -->

								<div class="list__name">
									<p>
										Monroe
									</p>
								</div><!-- /.list__name -->
							</a>
						</li>

						<li>
							<a href="<?php echo get_field('brown_county', 'option')?>">
								<div class="list__image">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/yellow-4.png" alt="" width="51" height="63">
								</div><!-- /.list__image -->

								<div class="list__name">
									<p>
										Brown
									</p>
								</div><!-- /.list__name -->
							</a>
						</li>

						<li>
							<a href="<?php echo get_field('daviess_county', 'option')?>">
								<div class="list__image">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/yellow-5.png" alt="" width="56" height="81">
								</div><!-- /.list__image -->

								<div class="list__name">
									<p>
										Daviess
									</p>
								</div><!-- /.list__name -->
							</a>
						</li>

						<li>
							<a href="<?php echo get_field('martin_county', 'option')?>">
								<div class="list__image">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/yellow-6.png" alt="" width="40" height="82">
								</div><!-- /.list__image -->

								<div class="list__name">
									<p>
										Martin
									</p>
								</div><!-- /.list__name -->
							</a>
						</li>

						<li>
							<a href="<?php echo get_field('lawrence_county', 'option')?>">
								<div class="list__image">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/yellow-7.png" alt="" width="66" height="67">
								</div><!-- /.list__image -->

								<div class="list__name">
									<p>
										Lawrence
									</p>
								</div><!-- /.list__name -->
							</a>
						</li>

						<li>
							<a href="<?php echo get_field('dubois_county', 'option')?>">
								<div class="list__image">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/yellow-8.png" alt="" width="65" height="70">
								</div><!-- /.list__image -->

								<div class="list__name">
									<p>
										Dubois
									</p>
								</div><!-- /.list__name -->
							</a>
						</li>

						<li>
							<a href="<?php echo get_field('orange_county', 'option')?>">
								<div class="list__image">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/yellow-9.png" alt="" width="63" height="64">
								</div><!-- /.list__image -->

								<div class="list__name">
									<p>
										Orange
									</p>
								</div><!-- /.list__name -->
							</a>
						</li>

						<li>
							<a href="<?php echo get_field('washington_county', 'option')?>">
								<div class="list__image">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/yellow-10.png" alt="" width="74" height="69">
								</div><!-- /.list__image -->

								<div class="list__name">
									<p>
										Washington
									</p>
								</div><!-- /.list__name -->
							</a>
						</li>

						<li>
							<a href="<?php echo get_field('crawford_county', 'option')?>">
								<div class="list__image">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/yellow-11.png" alt="" width="68" height="71">
								</div><!-- /.list__image -->

								<div class="list__name">
									<p>
										Crawford
									</p>
								</div><!-- /.list__name -->
							</a>
						</li>
					</ul><!-- /.list-counties -->
				</header><!-- /.section__head -->

				<div class="section__body">
					<div class="circles">
						<div class="circles__row">
							<div class="circles__group">
								<div class="circle circle--yellow">
									<div class="circle__content">
										<span class="fz-m"><?php echo get_field('cities_and_towns')?></span>

										<span>Cities & Towns</span>
									</div><!-- /.circle__content -->
								</div><!-- /.circle -->

								<div class="circle circle--big circle--blue circle--blue-bg">
									<span class="fz-xs">
										population
									</span>

									<span class="fz-xl"><?php echo get_field('population')?></span>
								</div><!-- /.circle circle-/-big circle-/-blue circle-/-blue-bg -->

								<div class="circle circle--yellow">
									<span class="fz-m"><?php echo get_field('total_square_miles')?></span>

									<span>square miles</span>
								</div><!-- /.circle circle-/-yellow -->
							</div><!-- /.circles__group -->

							<div class="circles__group">
								<div class="circle circle--big circle--yellow circle--yellow-bg">
									<span class="fz-s">Key</span>

									<span class="fz-s">Industry</span>

									<span class="fz-s">Sectors</span>
								</div><!-- /.circle circle-/-big circle-/-yellow circle-/-yellow-bg -->

								<div class="circle circle--blue">
									<span><?php echo get_field('key_industry_sector_1')?></span>
								</div><!-- /.circle circle-/-blue -->

								<div class="circle circle--blue">
									<span><?php echo get_field('key_industry_sector_2')?></span>
								</div><!-- /.circle circle-/-blue -->

								<div class="circle circle--blue">
									<span><?php echo get_field('key_industry_sector_3')?></span>
								</div><!-- /.circle circle-/-blue -->
							</div><!-- /.circles__group -->
						</div><!-- /.circles__row -->

						<div class="circles__row">
							<div class="circles__group">
								<div class="circle circle--big circle--yellow circle--yellow-bg">
									<span class="fz-s">major</span>

									<span class="fz-s">employers</span>
								</div><!-- /.circle circle-/-big circle-/-yellow circle-/-yellow-bg -->

								<div class="circle circle--blue">
									<span><?php echo get_field('major_employer_1')?></span>
								</div><!-- /.circle circle-/-blue -->

								<div class="circle circle--blue">
									<span><?php echo get_field('major_employer_2')?></span>
								</div><!-- /.circle circle-/-blue -->

								<div class="circle circle--blue">
									<span><?php echo get_field('major_employer_3')?></span>
								</div><!-- /.circle circle-/-blue -->

								<div class="circle circle--blue">
									<span><?php echo get_field('major_employer_4')?></span>
								</div><!-- /.circle circle-/-blue -->

								<div class="circle circle--blue">
									<span><?php echo get_field('major_employer_5')?></span>
								</div><!-- /.circle circle-/-blue -->

								<div class="circle circle--blue">
									<span><?php echo get_field('major_employer_6')?></span>
								</div><!-- /.circle circle-/-blue -->

								<div class="circle circle--blue">
									<span><?php echo get_field('major_employer_7')?></span>
								</div><!-- /.circle circle-/-blue -->
							</div><!-- /.circles__group -->
						</div><!-- /.circles__row -->

						<div class="circles__row">
							<div class="circles__group">
								<div class="circle circle--medium circle--blue circle--blue-bg">
									<span class="fz-l"><?php echo get_field('people_in_workforce')?></span>

									<span class="fz-xs">people in</span>

									<span class="fz-xs">workforce</span>
								</div><!-- /.circle circle-/-medium circle-/-blue circle-/-blue-bg -->
							</div><!-- /.circles__group -->

							<div class="circles__group">
								<div class="circle circle--yellow">
									<span class="fz-m"><?php echo get_field('school_districts')?></span>

									<span>school districts</span>
								</div><!-- /.circle circle-/-yellow -->

								<div class="circle circle--blue circle--blue-bg">
									<span class="fz-m"><?php echo get_field('students')?></span>

									<span>students</span>
								</div><!-- /.circle circle-/-blue circle-/-blue-bg -->

								<div class="circle circle--yellow" style="display: none;"> <!-- HIDDEN -->
									<span class="fz-m"><?php echo get_field('cost_of_living')?></span>

									<span>cost of living</span>
								</div><!-- /.circle circle-/-yellow -->

								<div class="circle circle--blue circle--blue-bg" style="display: none;"> <!-- HIDDEN -->
									<span class="fz-m"><?php echo get_field('square_miles_of_recreation')?></span>

									<span>square miles of</span>

									<span>recreation</span>
								</div><!-- /.circle circle-/-blue circle-/-blue-bg -->
							</div><!-- /.circles__group -->

							<div class="circles__group">
								<div class="circle circle--blue">
									<span><?php echo get_field('surrounding_area_1')?></span>
								</div><!-- /.circle circle-/-blue -->

								<div class="circle circle--big circle--yellow circle--yellow-bg">
									<span class="fz-s">HOOSIER</span>

									<span class="fz-s">NATIONAL FOREST</span>
								</div><!-- /.circle circle-/-big circle-/-yellow circle-/-yellow-bg -->

								<div class="circle circle--blue">
									<span><?php echo get_field('surrounding_area_2')?></span>
								</div><!-- /.circle circle-/-blue -->
							</div><!-- /.circles__group -->
						</div><!-- /.circles__row -->
					</div><!-- /.circles -->
				</div><!-- /.section__body -->
			</div><!-- /.shell -->
		</section><!-- /.section-counties -->

		<div class="section-image-text decoration-dark decoration-bottom decoration-top">
			<div class="shell">
				<div class="section__inner">
					<div class="section__image">
						<figure class="multi-images">
							<img src="<?php echo get_field('section_one_image_1') ?>" alt="" width="389" height="257">

							<img src="<?php echo get_field('section_one_image_2') ?>" alt="" width="389" height="257">

							<img src="<?php echo get_field('section_one_image_3') ?>" alt="" width="389" height="257">

							<img src="<?php echo get_field('section_one_image_4') ?>" alt="" width="389" height="257">
						</figure>
					</div><!-- /.section__image -->

					<div class="section__body">
						<h4 class="title">
							<?php echo get_field('section_one_main_title') ?>
						</h4><!-- /.title -->

						<p>
							<?php echo get_field('section_one_paragraph') ?>
						</p>
					</div><!-- /.section__body -->
				</div><!-- /.section__inner -->
			</div><!-- /.shell -->
		</div><!-- /.section-image-text -->

		<div class="section-wood">
			<div class="shell">
				<div class="section__inner" style="background-image: url(<?php echo get_field('section_two_featured_image') ?>;">
					<div class="section__body" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/wood-left.png);">
						<div class="section__content">
							<h4 class="title">
								<?php echo get_field('section_two_main_title') ?>
							</h4><!-- /.title -->

							<p>
								<?php echo get_field('section_two_paragraph') ?>
							</p>
						</div><!-- /.section__content -->
					</div><!-- /.section__body -->
				</div><!-- /.section__inner -->
			</div><!-- /.shell -->
		</div><!-- /.section-wood -->

		<div class="section-image-text decoration-dark decoration-bottom decoration-top">
			<div class="shell">
				<div class="section__inner">
					<div class="section__image section__image--full-width">
						<figure>
							<img src="<?php echo get_field('section_three_featured_image') ?>" alt="" width="762" height="329">
						</figure>
					</div><!-- /.section__image -->

					<div class="section__body">
						<h4 class="title">
							<?php echo get_field('section_three_main_title') ?>
						</h4><!-- /.title -->

						<p>
							<?php echo get_field('section_three_paragraph') ?>
						</p>
					</div><!-- /.section__body -->
				</div><!-- /.section__inner -->
			</div><!-- /.shell -->
		</div><!-- /.section-image-text -->

		<div class="section-wood">
			<div class="shell">
				<div class="section__inner" style="background-image: url(<?php echo get_field('section_four_featured_image') ?>);">
					<div class="section__body" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/wood-left.png);">
						<div class="section__content">
							<h4 class="title">
								<?php echo get_field('section_four_main_title') ?>
							</h4><!-- /.title -->

							<p>
								<?php echo get_field('section_four_paragraph') ?>
							</p>
						</div><!-- /.section__content -->
					</div><!-- /.section__body -->
				</div><!-- /.section__inner -->
			</div><!-- /.shell -->
		</div><!-- /.section-wood -->

<?php get_footer(); ?>
