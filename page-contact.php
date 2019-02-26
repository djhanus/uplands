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
									<li>
										<a href="#tab-1" style="background-image: url('<?php echo get_field('section_one_image_a')?>');">
											<span><?php echo get_field('section_one_info_a')?></span>
										</a>
									</li>
				
									<li>
										<a href="#tab-2" style="background-image: url('<?php echo get_field('section_one_image_b')?>');">
											<span><?php echo get_field('section_one_info_b')?></span>
										</a>
									</li>
				
									<li class="current">
										<a href="#tab-3" style="background-image: url('<?php echo get_field('section_one_image_c')?>');">
											<span><?php echo get_field('section_one_info_c')?></span>
										</a>
									</li>
				
									<li>
										<a href="#tab-4" style="background-image: url('<?php echo get_field('section_one_image_d')?>');">
											<span><?php echo get_field('section_one_info_d')?></span>
										</a>
									</li>
								</ul>
							</nav><!-- /.tabs__nav -->
						</div><!-- /.shell -->
					</div><!-- /.tabs__head -->
					
					<div class="tabs__body">
						<div id="tab-1" class="tab decoration-dark decoration-bottom decoration-top">
							<div class="shell">
								<div class="form">
									<form action="#" method="post">
										<div class="form__inner">
											<div class="form__body">
												<div class="form__row form__row--grid">
													<div class="form__col form__col--1of2">
														<div class="form__controls">
															<input type="text" id="first-name" placeholder="First Name 1 *" class="field" name="first_name" required="">
														</div><!-- /.form__controls -->
													</div><!-- /.form__col -->

													<div class="form__col form__col--1of2">
														<div class="form__controls">
															<input type="text" id="last-name" placeholder="Last Name *" class="field" name="last_name" required="">
														</div><!-- /.form__controls -->
													</div><!-- /.form__col -->
												</div><!-- /.form__row -->
												
												<div class="form__row form__row--grid">
													<div class="form__col form__col--1of2">
														<div class="form__controls">
															<input type="text" id="email" placeholder="Email *" class="field" name="email" required="">
														</div><!-- /.form__controls -->
													</div><!-- /.form__col -->

													<div class="form__col form__col--1of2">
														<div class="form__controls">
															<input type="text" id="website" placeholder="Website" class="field" name="website">
														</div><!-- /.form__controls -->
													</div><!-- /.form__col -->
												</div><!-- /.form__row -->

												<div class="form__row">
													<div class="form__controls">
														<textarea class="textarea field" placeholder="Message *" required=""></textarea>
													</div><!-- /.form__controls -->
												</div><!-- /.form__row -->
											</div><!-- /.form__body -->

											<div class="form__foot">
												<a href="#" class="btn">Contact us</a>

												<span class="form__hint">*required field</span>
											</div><!-- /.form__foot -->
										</div><!-- /.form__inner -->
									</form>
								</div><!-- /.form -->
							</div><!-- /.shell -->
						</div><!-- /.tab -->

						<div id="tab-2" class="tab decoration-dark decoration-bottom decoration-top">
							<div class="shell">
								<div class="form">
									<form action="#" method="post">
										<div class="form__inner">
											<div class="form__body">
												<div class="form__row form__row--grid">
													<div class="form__col form__col--1of2">
														<div class="form__controls">
															<input type="text" id="first-name" placeholder="First Name 2 *" class="field" name="first_name" required="">
														</div><!-- /.form__controls -->
													</div><!-- /.form__col -->

													<div class="form__col form__col--1of2">
														<div class="form__controls">
															<input type="text" id="last-name" placeholder="Last Name *" class="field" name="last_name" required="">
														</div><!-- /.form__controls -->
													</div><!-- /.form__col -->
												</div><!-- /.form__row -->
												
												<div class="form__row form__row--grid">
													<div class="form__col form__col--1of2">
														<div class="form__controls">
															<input type="text" id="email" placeholder="Email *" class="field" name="email" required="">
														</div><!-- /.form__controls -->
													</div><!-- /.form__col -->

													<div class="form__col form__col--1of2">
														<div class="form__controls">
															<input type="text" id="website" placeholder="Website" class="field" name="website">
														</div><!-- /.form__controls -->
													</div><!-- /.form__col -->
												</div><!-- /.form__row -->

												<div class="form__row">
													<div class="form__controls">
														<textarea class="textarea field" placeholder="Message *" required=""></textarea>
													</div><!-- /.form__controls -->
												</div><!-- /.form__row -->
											</div><!-- /.form__body -->

											<div class="form__foot">
												<a href="#" class="btn">Contact us</a>

												<span class="form__hint">*required field</span>
											</div><!-- /.form__foot -->
										</div><!-- /.form__inner -->
									</form>
								</div><!-- /.form -->
							</div><!-- /.shell -->
						</div><!-- /.tab -->

						<div id="tab-3" class="current tab decoration-dark decoration-bottom decoration-top">
							<div class="shell">
								<div class="form">
									<form action="#" method="post">
										<div class="form__inner">
											<div class="form__body">
												<div class="form__row form__row--grid">
													<div class="form__col form__col--1of2">
														<div class="form__controls">
															<input type="text" id="first-name" placeholder="First Name *" class="field" name="first_name" required="">
														</div><!-- /.form__controls -->
													</div><!-- /.form__col -->

													<div class="form__col form__col--1of2">
														<div class="form__controls">
															<input type="text" id="last-name" placeholder="Last Name *" class="field" name="last_name" required="">
														</div><!-- /.form__controls -->
													</div><!-- /.form__col -->
												</div><!-- /.form__row -->
												
												<div class="form__row form__row--grid">
													<div class="form__col form__col--1of2">
														<div class="form__controls">
															<input type="text" id="email" placeholder="Email *" class="field" name="email" required="">
														</div><!-- /.form__controls -->
													</div><!-- /.form__col -->

													<div class="form__col form__col--1of2">
														<div class="form__controls">
															<input type="text" id="website" placeholder="Website" class="field" name="website">
														</div><!-- /.form__controls -->
													</div><!-- /.form__col -->
												</div><!-- /.form__row -->

												<div class="form__row">
													<div class="form__controls">
														<textarea class="textarea field" placeholder="Message *" required=""></textarea>
													</div><!-- /.form__controls -->
												</div><!-- /.form__row -->
											</div><!-- /.form__body -->

											<div class="form__foot">
												<a href="#" class="btn">Contact us</a>

												<span class="form__hint">*required field</span>
											</div><!-- /.form__foot -->
										</div><!-- /.form__inner -->
									</form>
								</div><!-- /.form -->
							</div><!-- /.shell -->
						</div><!-- /.tab -->

						<div id="tab-4" class="tab decoration-dark decoration-bottom decoration-top">
							<div class="shell">
								<div class="form">
									<form action="#" method="post">
										<div class="form__inner">
											<div class="form__body">
												<div class="form__row form__row--grid">
													<div class="form__col form__col--1of2">
														<div class="form__controls">
															<input type="text" id="first-name" placeholder="First Name 4 *" class="field" name="first_name" required="">
														</div><!-- /.form__controls -->
													</div><!-- /.form__col -->

													<div class="form__col form__col--1of2">
														<div class="form__controls">
															<input type="text" id="last-name" placeholder="Last Name *" class="field" name="last_name" required="">
														</div><!-- /.form__controls -->
													</div><!-- /.form__col -->
												</div><!-- /.form__row -->
												
												<div class="form__row form__row--grid">
													<div class="form__col form__col--1of2">
														<div class="form__controls">
															<input type="text" id="email" placeholder="Email *" class="field" name="email" required="">
														</div><!-- /.form__controls -->
													</div><!-- /.form__col -->

													<div class="form__col form__col--1of2">
														<div class="form__controls">
															<input type="text" id="website" placeholder="Website" class="field" name="website">
														</div><!-- /.form__controls -->
													</div><!-- /.form__col -->
												</div><!-- /.form__row -->

												<div class="form__row">
													<div class="form__controls">
														<textarea class="textarea field" placeholder="Message *" required=""></textarea>
													</div><!-- /.form__controls -->
												</div><!-- /.form__row -->
											</div><!-- /.form__body -->

											<div class="form__foot">
												<a href="#" class="btn">Contact us</a>

												<span class="form__hint">*required field</span>
											</div><!-- /.form__foot -->
										</div><!-- /.form__inner -->
									</form>
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