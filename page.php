<?php get_header(); ?>	<!-- Standard Page Template -->

	<div class="main">
		<div class="section-article">
			<div class="shell">
				<article class="article article--default">
					<header class="article__head">
						<h2 class="article__title title"><?php echo the_title('')?></h2><!-- /.article__title -->
					</header><!-- /.article__head -->

					<div class="article__body">
						<div class="article__entry">
							<div class="standard-page">
							
					        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
					          the_content();
					            endwhile; else: ?>
					        <?php endif; ?>
					    	</div>
							
						</div><!-- /.article__entry -->
					</div><!-- /.article__body -->
				</article><!-- /.article -->
			</div><!-- /.shell -->
		</div><!-- /.section-article -->
	</div><!-- /.main -->

<?php get_footer(); ?>
