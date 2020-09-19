<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php get_sidebar(); ?>
		<div class="content-block">
			<div class="container">
				<?php get_template_part('template-part/block', 'navbar'); ?>
				<article class="simpe-template">
					<div class="clinic">
						<div class="clinic-about clinic__about">
							<h1 class="clinic-about__title title"><?php the_title(); ?></h1>
							<div class="clinic-about-wrap">
								<div class="clinic-about__text">
									<?php
									$i = get_the_content();
									if (empty($i)) {
										echo 'Страница в разработке';
									} else {
										the_content();
									}
									?>
								</div>
							</div>
						</div>
					</div>
				</article>
			</div>
			<!-- /.container -->
		</div>
		<!-- /.content-block -->
<?php endwhile;
endif; ?>
<?php get_footer(); ?>