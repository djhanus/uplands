<footer class="footer decoration-dark decoration-top">
	<div class="shell">
		<div class="footer__inner">
			<div class="footer__cols">
				<div class="footer__col">
					<div class="footer__item">
						<h6>
							Our Counties
						</h6>
						
						<nav class="footer__nav footer__navs">
							<ul>
								<li>
									<a href="<?php echo get_field('brown_county', 'option')?>">Brown</a>
								</li>
								
								<li>
									<a href="<?php echo get_field('crawford_county', 'option')?>">Crawford</a>
								</li>
								
								<li>
									<a href="<?php echo get_field('daviess_county', 'option')?>">Daviess</a>
								</li>
								
								<li>
									<a href="<?php echo get_field('dubois_county', 'option')?>">Dubois</a>
								</li>
								
								<li>
									<a href="<?php echo get_field('greene_county', 'option')?>">Greene</a>
								</li>
								
								<li>
									<a href="<?php echo get_field('lawrence_county', 'option')?>">Lawrence</a>
								</li>
							</ul>

							<ul>
								<li>
									<a href="<?php echo get_field('martin_county', 'option')?>">Martin</a>
								</li>
								
								<li>
									<a href="<?php echo get_field('monroe_county', 'option')?>">Monroe</a>
								</li>
								
								<li>
									<a href="<?php echo get_field('orange_county', 'option')?>">Orange</a>
								</li>
								
								<li>
									<a href="<?php echo get_field('owen_county', 'option')?>">Owen</a>
								</li>
								
								<li>
									<a href="<?php echo get_field('washington_county', 'option')?>">Washington</a>
								</li>
							</ul>
						</nav><!-- /.footer__nav -->
					</div><!-- /.footer__item -->

					<div class="footer__item">
						<div class="socials">
							<ul>
								<li>
									<a href="<?php echo get_field('linkedin_url', 'option') ?>">
										<i class="fab fa-linkedin-in"></i>
									</a>
								</li>
								
								<li>
									<a href="<?php echo get_field('twitter_url', 'option')?>">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								
								<li>
									<a href="<?php echo get_field('instagram_url', 'option')?>">
										<i class="fab fa-instagram"></i>
									</a>
								</li>
								
								<li>
									<a href="<?php echo get_field('facebook_url', 'option')?>">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
							</ul>
						</div><!-- /.socials -->
					</div><!-- /.footer__item -->
				</div><!-- /.footer__col -->
				
				<div class="footer__col footer__col--small">
					<a href="/" class="footer__logo">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-footer.png" alt="" width="122" height="347">
					</a>
				</div><!-- /.footer__col -->
				
				<div class="footer__col textright">
					<div class="footer__item footer__quick-links">
						<h6>
							Quick Links
						</h6>
						<nav class="footer__nav">
							<?php wp_nav_menu( array( 'theme_location' => 'footer-quicklinks' ) ); ?>
						</nav><!-- /.footer__nav -->
					</div><!-- /.footer__item -->

					<div class="footer__item">
						<h6>
							Our Partners
						</h6>

						<p>
							<a href="<?php echo get_field('contact_roi', 'options')?>" target="_blank">Regional Opportunity Initiatives, Inc. (ROI)</a>
						</p>
						
						<p>
							<a href="<?php echo get_field('contact_in3', 'options')?>" target="_blank">Indiana Innovation Institute (IN3)</a>
						</p>
						
						<p>
							<a href="<?php echo get_field('contact_cre', 'options')?>" target="_blank">Indiana University Center for Rural Engagement</a>
						</p>
					</div><!-- /.footer__item -->
				</div><!-- /.footer__col -->
			</div><!-- /.footer__cols -->
		</div><!-- /.footer__inner -->
	</div><!-- /.shell -->
</footer><!-- /.footer -->
</div><!-- /.wrapper -->

<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/jquery-3.1.1.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/html5-video/js/ckin.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/bundle.js"></script>

</body>
</html>