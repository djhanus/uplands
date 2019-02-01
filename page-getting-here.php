<?php get_header();

	/* Template Name: Getting Here */ ?>
	
	<div class="main">
		<div class="section-article">
			<div class="shell">
				<article class="article article--default">
					<header class="article__head">
						<h2 class="article__title title"><?php echo get_field('section_one_title') ?></h2><!-- /.article__title -->
					</header><!-- /.article__head -->

					<div class="article__body">
						<div class="article__entry">
							<p><?php echo get_field('section_one_paragraph') ?></p>
						</div><!-- /.article__entry -->
					</div><!-- /.article__body -->
				</article><!-- /.article -->
			</div><!-- /.shell -->
		</div><!-- /.section-article -->

		<section class="section-counties section--map" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/map-frame.jpg);">
			<div class="shell">
				<div class="section__body">
					<div class="section__group">
						<ul class="list-counties">
							<li>
								<a href="#">
									<div class="list__image">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/yellow-1.png" alt="" width="64" height="66">
									</div><!-- /.list__image -->

									<div class="list__name">
										<p>Owen</p>
									</div><!-- /.list__name -->
								</a>
							</li>

							<li>
								<a href="#">
									<div class="list__image">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/yellow-2.png" alt="" width="90" height="59">
									</div><!-- /.list__image -->

									<div class="list__name">
										<p>Greene</p>
									</div><!-- /.list__name -->
								</a>
							</li>

							<li>
								<a href="#">
									<div class="list__image">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/yellow-3.png" alt="" width="61" height="73">
									</div><!-- /.list__image -->

									<div class="list__name">
										<p>Monroe</p>
									</div><!-- /.list__name -->
								</a>
							</li>

							<li>
								<a href="#">
									<div class="list__image">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/yellow-4.png" alt="" width="51" height="63">
									</div><!-- /.list__image -->

									<div class="list__name">
										<p>Brown</p>
									</div><!-- /.list__name -->
								</a>
							</li>

							<li>
								<a href="#">
									<div class="list__image">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/yellow-5.png" alt="" width="56" height="81">
									</div><!-- /.list__image -->

									<div class="list__name">
										<p>Daviess</p>
									</div><!-- /.list__name -->
								</a>
							</li>

							<li>
								<a href="#">
									<div class="list__image">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/yellow-6.png" alt="" width="40" height="82">
									</div><!-- /.list__image -->

									<div class="list__name">
										<p>Martin</p>
									</div><!-- /.list__name -->
								</a>
							</li>
						</ul><!-- /.list-counties -->
					</div><!-- /.section__group -->

					<div class="section__group">
						<ul class="list-counties">
							<li>
								<a href="#">
									<div class="list__image">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/yellow-7.png" alt="" width="66" height="67">
									</div><!-- /.list__image -->

									<div class="list__name">
										<p>Lawrence</p>
									</div><!-- /.list__name -->
								</a>
							</li>

							<li>
								<a href="#">
									<div class="list__image">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/yellow-8.png" alt="" width="65" height="70">
									</div><!-- /.list__image -->

									<div class="list__name">
										<p>Dubois</p>
									</div><!-- /.list__name -->
								</a>
							</li>

							<li>
								<a href="#">
									<div class="list__image">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/yellow-9.png" alt="" width="63" height="64">
									</div><!-- /.list__image -->

									<div class="list__name">
										<p>Orange</p>
									</div><!-- /.list__name -->
								</a>
							</li>

							<li>
								<a href="#">
									<div class="list__image">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/yellow-10.png" alt="" width="74" height="69">
									</div><!-- /.list__image -->

									<div class="list__name">
										<p>Washington</p>
									</div><!-- /.list__name -->
								</a>
							</li>

							<li>
								<a href="#">
									<div class="list__image">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/yellow-11.png" alt="" width="68" height="71">
									</div><!-- /.list__image -->

									<div class="list__name">
										<p>CRAWFORD</p>
									</div><!-- /.list__name -->
								</a>
							</li>
						</ul><!-- /.list-counties -->
					</div><!-- /.section__group -->

					<div class="section__group section__group--alt">
						<ul class="list-counties">
							<li>
								<a href="#">
									<div class="list__image">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/pin-1.png" alt="" width="33" height="58">
									</div><!-- /.list__image -->

									<div class="list__name">
										<p>Jasper</p>
									</div><!-- /.list__name -->
								</a>
							</li>
							
							<li>
								<a href="#">
									<div class="list__image">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/pin-2.png" alt="" width="33" height="58">
									</div><!-- /.list__image -->

									<div class="list__name">
										<p>Washington</p>
									</div><!-- /.list__name -->
								</a>
							</li>
							
							<li>
								<a href="#">
									<div class="list__image">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/pin-3.png" alt="" width="33" height="58">
									</div><!-- /.list__image -->

									<div class="list__name">
										<p>NWS CRAne</p>
									</div><!-- /.list__name -->
								</a>
							</li>
							
							<li>
								<a href="#">
									<div class="list__image">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/pin-4.png" alt="" width="33" height="58">
									</div><!-- /.list__image -->

									<div class="list__name">
										<p>BEDFORD</p>
									</div><!-- /.list__name -->
								</a>
							</li>
							
							<li>
								<a href="#">
									<div class="list__image">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/pin-5.png" alt="" width="33" height="58">
									</div><!-- /.list__image -->

									<div class="list__name">
										<p>BLOOMINGTON</p>
									</div><!-- /.list__name -->
								</a>
							</li>
							
							<li>
								<a href="#">
									<div class="list__image">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/pin-6.png" alt="" width="33" height="58">
									</div><!-- /.list__image -->

									<div class="list__name">
										<p>NASHVILLE</p>
									</div><!-- /.list__name -->
								</a>
							</li>
						</ul><!-- /.list-counties -->
					</div><!-- /.section__group -->
				</div><!-- /.section__body -->
			</div><!-- /.shell -->
		</section><!-- /.section-counties -->

		<section class="section section--default decoration-dark decoration-bottom decoration-top">
			<div class="shell">
				<header class="section__head">
					<h2 class="section__title title"><?php echo get_field('section_two_title')?></h2><!-- /.section__title -->

					<div class="section__entry">
						<p><?php echo get_field('section_two_paragraph')?></p>
					</div><!-- /.section__entry -->
				</header><!-- /.section__head -->

				<div class="section__body">
					<div class="cols gutter-small">
						<div class="col col--2of3">
							<article class="article article--simple article--default">
								<div class="article__image" style="background-image: url('<?php echo get_field('section_two_image_one')?>');"></div><!-- /.article__image -->

								<div class="article__content">
									<header class="article__head">
										<h3 class="article__title title title--alt">By Car</h3><!-- /.article__title -->
									</header><!-- /.article__head -->

									<div class="article__body">
										<div class="cols">
											<div class="col col--1of2">
												<ul class="list-simple">
													<li><strong>Louisville:</strong> <?php echo get_field('louisville_directions')?></li>

													<li><strong>Cincinnati:</strong> <?php echo get_field('cincinnati_directions')?></li>
													
													<li><strong>EVANSVILLE:</strong> <?php echo get_field('evansville_directions')?></li>
												</ul><!-- /.list-simple -->
											</div><!-- /.col -->

											<div class="col col--1of2">
												<ul class="list-simple">
													<li><strong>Indianapolis:</strong> <?php echo get_field('indianapolis_directions')?></li>
													
													<li><strong>St.Louis:</strong> <?php echo get_field('st_louis_directions')?></li>
												</ul><!-- /.list-simple -->
											</div><!-- /.col -->
										</div><!-- /.cols -->
									</div><!-- /.article__body -->
								</div><!-- /.article__content -->
							</article><!-- /.article -->
						</div><!-- /.col -->

						<div class="col col--1of3">
							<article class="article article--simple article--default">
								<div class="article__image" style="background-image: url('<?php echo get_field('section_two_image_two')?>');"></div><!-- /.article__image -->

								<div class="article__content">
									<header class="article__head">
										<h3 class="article__title title title--alt">By plane</h3><!-- /.article__title -->
									</header><!-- /.article__head -->

									<div class="article__body">
										<div class="article__entry">
											<p><?php echo get_field('plane_directions')?></p>
										</div><!-- /.article__entry -->
									</div><!-- /.article__body -->
								</div><!-- /.article__content -->
							</article><!-- /.article -->
						</div><!-- /.col -->
					</div><!-- /.cols -->
				</div><!-- /.section__body -->
			</div><!-- /.shell -->
		</section><!-- /.section -->

		<section class="section section--simple">
			<div class="shell">
				<header class="section__head">
					<h2 class="section__title"><?php echo get_field('section_three_title')?></h2><!-- /.section__title -->
				</header><!-- /.section__head -->

				<div class="section__body">
					<div class="cols gutter-large">
						<div class="col col--1of3">
							<article class="article article--simple article--default">
								<div class="article__image" style="background-image: url('<?php echo get_field('section_three_image_one')?>');"></div><!-- /.article__image -->

								<div class="article__content">
									<header class="article__head">
										<h3 class="article__title title title--alt"><?php echo get_field('section_three_a')?></h3><!-- /.article__title -->
									</header><!-- /.article__head -->

									<div class="article__body">
										<div class="article__entry">
											<p><?php echo get_field('section_three_a_paragraph')?></p>
										</div><!-- /.article__entry -->
									</div><!-- /.article__body -->
								</div><!-- /.article__content -->
							</article><!-- /.article -->
						</div><!-- /.col -->

						<div class="col col--1of3">
							<article class="article article--simple article--default">
								<div class="article__image" style="background-image: url('<?php echo get_field('section_three_image_two')?>');"></div><!-- /.article__image -->

								<div class="article__content">
									<header class="article__head">
										<h3 class="article__title title title--alt"><?php echo get_field('section_three_b')?></h3><!-- /.article__title -->
									</header><!-- /.article__head -->

									<div class="article__body">
										<div class="article__entry">
											<p><?php echo get_field('section_three_b_paragraph')?> </p>
										</div><!-- /.article__entry -->
									</div><!-- /.article__body -->
								</div><!-- /.article__content -->
							</article><!-- /.article -->
						</div><!-- /.col -->

						<div class="col col--1of3">
							<article class="article article--simple article--default">
								<div class="article__image" style="background-image: url('<?php echo get_field('section_three_image_three')?>');"></div><!-- /.article__image -->

								<div class="article__content">
									<header class="article__head">
										<h3 class="article__title title title--alt"><?php echo get_field('section_three_c')?></h3><!-- /.article__title -->
									</header><!-- /.article__head -->

									<div class="article__body">
										<div class="article__entry">
											<p><?php echo get_field('section_three_c_paragraph')?></p>
										</div><!-- /.article__entry -->
									</div><!-- /.article__body -->
								</div><!-- /.article__content -->
							</article><!-- /.article -->
						</div><!-- /.col -->
					</div><!-- /.cols -->
				</div><!-- /.section__body -->
			</div><!-- /.shell -->
		</section><!-- /.section -->
	</div><!-- /.main -->

<?php get_footer(); ?>
