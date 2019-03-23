<?php get_header();

	/* Template Name: Contact */ ?>

	<div class="main">
		<div class="section-article section-article--alt">
			<div class="shell">
				<article class="article article--default">
					<header class="article__head">
						<h4 class="article__title title"><?php echo get_field('section_one_title')?></h4><!-- /.article__title -->
					</header><!-- /.article__head -->

					<div class="article__body">
						<div class="article__entry">
							<p><?php echo get_field('section_one_paragraph')?></p>
						</div><!-- /.article__entry -->
					</div><!-- /.article__body -->
				</article><!-- /.article -->
			</div><!-- /.shell -->
		</div><!-- /.section-article -->

		<section class="section-tabs">
			<header class="section__head">
				<div class="shell">
					<h4 class="section__title"><?php echo get_field('section_one_more_info')?></h4><!-- /.section__title -->
				</div><!-- /.shell -->
			</header><!-- /.section__head -->

			<div class="section__body">
				<div class="tabs tabs--abstract">
					<div class="tabs__head">
						<div class="shell">
							<nav class="tabs__nav">
								<ul>
									<li class="current" data-subject="<?php echo get_field('section_one_info_a')?>">
										<a href="#tab-1" style="background-image: url('<?php echo get_field('section_one_image_a')?>');">
											<span><?php echo get_field('section_one_info_a')?></span>
										</a>
									</li>

									<li data-subject="<?php echo get_field('section_one_info_b')?>">
										<a href="#tab-2" style="background-image: url('<?php echo get_field('section_one_image_b')?>');">
											<span><?php echo get_field('section_one_info_b')?></span>
										</a>
									</li>

									<li data-subject="<?php echo get_field('section_one_info_c')?>">
										<a href="#tab-3" style="background-image: url('<?php echo get_field('section_one_image_c')?>');">
											<span><?php echo get_field('section_one_info_c')?></span>
										</a>
									</li>

									<li data-subject="<?php echo get_field('section_one_info_d')?>">
										<a href="#tab-4" style="background-image: url('<?php echo get_field('section_one_image_d')?>');">
											<span><?php echo get_field('section_one_info_d')?></span>
										</a>
									</li>
								</ul>
							</nav><!-- /.tabs__nav -->
						</div><!-- /.shell -->
					</div><!-- /.tabs__head -->

					<div class="tabs__body">
						<div class="tab current decoration-dark decoration-bottom decoration-top">
							<div class="shell">
								<style>
									textarea { padding-top: 12px !important; height: 250px !important; }
									input[type="submit"]{ background: #ecbf47; border-color: #ecbf47; width: auto; }
								</style>
								<div class="form">

									<?php echo do_shortcode( '[contact-form-7 id="652" title="Contact form 1"]' ); ?>

									<!-- <div class="form__inner">
									  <div class="form__body">
									    <div class="form__row form__row--grid">
									      <div class="form__col form__col--1of2">
									        <div class="form__controls">
									          [text* first-name placeholder "First Name *"]
									        </div>
									      </div>

									      <div class="form__col form__col--1of2">
									        <div class="form__controls">
									          [text* last-name placeholder "Last Name *"]
									        </div>
									      </div>
									    </div>

									    <div class="form__row form__row--grid">
									      <div class="form__col form__col--1of2">
									        <div class="form__controls">
									          [email* email placeholder "Email *"]
									        </div>
									      </div>

									      <div class="form__col form__col--1of2">
									        <div class="form__controls">
									          [text website placeholder "Website"]
									        </div>
									      </div>
									    </div>

									    <div class="form__row">
									        <div class="form__controls">
									          [text subject placeholder "Subject: General"]
									        </div>
									    </div>

									    <div class="form__row">
									      <div class="form__controls">
									        [textarea* message placeholder "Message *"]
									      </div>
									    </div>
									  </div>

									  <div class="form__foot">
									    [submit "Contact Us"]
									    <span class="form__hint">*required field</span>
									  </div>
									</div> -->

								</div><!-- /.form -->
							</div><!-- /.shell -->
						</div><!-- /.tab -->
					</div><!-- /.tabs__body -->
				</div><!-- /.tabs -->
			</div><!-- /.section__body -->
		</section><!-- /.section-tabs -->

		<div class="section-article section-article--alt">
			<div class="shell">
				<article class="article article--default">
					<header class="article__head">
						<h4 class="article__title title">Partner Sites</h4><!-- /.article__title -->
					</header><!-- /.article__head -->

					<div class="article__body">
						<ul class="list-links">
							<li>
								<a href="<?php echo get_field('contact_roi', 'options')?>"" target="_blank">REGIONAL OPPORTUNITY INITIATIVES, INC. (ROI)</a>
							</li>

							<li>
								<a href="<?php echo get_field('contact_in3', 'options')?>" target="_blank">INDIANA INNOVATION INSTITUTE (IN3)</a>
							</li>

							<li>
								<a href="<?php echo get_field('contact_cre', 'options')?>" target="_blank">INDIANA UNIVERSITY CENTER FOR RURAL ENGAGEMENT</a>
							</li>
						</ul><!-- /.list-links -->
					</div><!-- /.article__body -->
				</article><!-- /.article -->
			</div><!-- /.shell -->
		</div><!-- /.section-article -->
	</div><!-- /.main -->

<?php get_footer(); ?>