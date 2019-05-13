<?php get_header();

	/* Template Name: Enjoy & Explore */ ?>

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

		<div class="section-title">
			<div class="shell">
				<h2>
					Stay
				</h2>
			</div><!-- /.shell -->
		</div><!-- /.section-title -->

		<div class="section-image-text decoration-dark decoration-bottom decoration-top">
			<div class="shell">
				<div class="section__inner">
					<div class="section__image">
						<figure class="multi-images">
							<img src="<?php echo get_field('image_1'); ?>" alt="" width="408" height="auto">
					
							<img src="<?php echo get_field('image_2'); ?>" alt="" width="408" height="auto">
					
							<img src="<?php echo get_field('image_3'); ?>" alt="" width="408" height="auto">
					
							<img src="<?php echo get_field('image_4'); ?>" alt="" width="408" height="auto">
						</figure>
					</div><!-- /.section__image -->
					
					<div class="section__body">
						<h4 class="title">
							<?php echo get_field('section_one_title') ?>
						</h4><!-- /.title -->
					
						<p>
							<?php echo get_field('section_one_paragraph') ?>
						</p>

						<ul class="list-benefits">
							<?php echo get_field('section_one_list') ?>
						</ul><!-- /.list-benefits -->
					</div><!-- /.section__body -->
				</div><!-- /.section__inner -->
			</div><!-- /.shell -->
		</div><!-- /.section-image-text -->

		<div class="section-title">
			<div class="shell">
				<h2>
					Shop
				</h2>
			</div><!-- /.shell -->
		</div><!-- /.section-title -->

		<div class="section-wood">
			<div class="shell">
				<div class="section__inner" style="background-image: url(<?php echo get_field('image'); ?>);">
					<div class="section__body" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/wood-left.png);">
						<div class="section__content">
							<h4 class="title">
								<?php echo get_field('section_two_title') ?>
							</h4><!-- /.title -->

							<p>
								<?php echo get_field('section_two_paragraph') ?>
							</p>

							<ul class="list-benefits">
								<?php echo get_field('section_two_list') ?>
							</ul><!-- /.list-benefits -->
						</div><!-- /.section__content -->
					</div><!-- /.section__body -->
				</div><!-- /.section__inner -->
			</div><!-- /.shell -->
		</div><!-- /.section-wood -->

		<div class="section-title">
			<div class="shell">
				<h2>
					EAT & DRINK
				</h2>
			</div><!-- /.shell -->
		</div><!-- /.section-title -->

		<div class="section-image-text decoration-dark decoration-bottom decoration-top">
			<div class="shell">
				<div class="section__inner">
					<div class="section__image">
						<figure>
							<img src="<?php echo get_field('image1'); ?>" alt="" width="835" height="588">
						</figure>
					</div><!-- /.section__image -->
					
					<div class="section__body">
						<h4 class="title">
							<?php echo get_field('section_three_title') ?>
						</h4><!-- /.title -->
					
						<p>
							<?php echo get_field('section_three_paragraph') ?>
						</p>

						<ul class="list-benefits">
							<?php echo get_field('section_three_list') ?>
						</ul><!-- /.list-benefits -->
					</div><!-- /.section__body -->
				</div><!-- /.section__inner -->
			</div><!-- /.shell -->
		</div><!-- /.section-image-text -->

		<div class="section-title">
			<div class="shell">
				<h2>
					THINGS TO DO 
				</h2>
			</div><!-- /.shell -->
		</div><!-- /.section-title -->

		<div class="section-wood">
			<div class="shell">
				<div class="section__inner" style="background-image: url(<?php echo get_field('image2'); ?>);">
					<div class="section__body section--wider" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/wood-left.png);">
						<div class="section__content">
							<h4 class="title">
								<?php echo get_field('section_four_title') ?>
							</h4><!-- /.title -->

							<p>
								<?php echo get_field('section_four_paragraph') ?>
							</p>

							<div class="lists">
								<ul class="list-benefits">
									<?php echo get_field('section_four_list_a') ?>
								</ul><!-- /.list-benefits -->
								
								<ul class="list-benefits">
									<?php echo get_field('section_four_list_b') ?>
								</ul><!-- /.list-benefits -->
							</div><!-- /.lists -->

							<ul class="list-benefits">
								<li>And MORE...!</li>
							</ul><!-- /.list-benefits -->
						</div><!-- /.section__content -->
					</div><!-- /.section__body -->
				</div><!-- /.section__inner -->
			</div><!-- /.shell -->
		</div><!-- /.section-wood -->

<?php get_footer(); ?>
