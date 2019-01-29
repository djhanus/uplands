<?php get_header();

	/* Template Name: Develop */ ?>

		<div class="intro intro--alt intro--margin-bot">
			<div class="intro__inner" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/work.jpg);">
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

		<div class="section-image-text section-image-text--alt decoration-dark decoration-bottom decoration-top">
			<div class="shell">
				<div class="section__inner">
					<div class="section__image section__image--full-width">
						<figure>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/microscope.jpg" alt="" width="798" height="724">
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

		<div class="section-image-text section-image-text--alt decoration-dark decoration-bottom decoration-top">
			<div class="shell">
				<div class="section__inner">
					<div class="section__body">
						<h4 class="title">
							<?php echo get_field('section_two_main_title') ?>
						</h4><!-- /.title -->
					
						<p>
							<?php echo get_field('section_two_paragraph') ?>
						</p>
					</div><!-- /.section__body -->

					<div class="section__image section__image--full-width">
						<figure>
							<img class="alignself-right" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/temp/classroom.jpg" alt="" width="725" height="724">
						</figure>
					</div><!-- /.section__image -->
				</div><!-- /.section__inner -->
			</div><!-- /.shell -->
		</div><!-- /.section-image-text -->

<?php get_footer(); ?>

