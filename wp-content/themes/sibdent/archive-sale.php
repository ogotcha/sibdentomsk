<?php get_header(); ?>
<?php get_sidebar(); ?>
<div class="content-block">
	<div class="container">
		<?php get_template_part( 'template-part/block', 'navbar' ); ?>
		<div class="stocks">
			<h3 class="stocks__title title">Новости и акции</h3>
			<div class="stocks-wrap">
			<?php while ( have_posts() ) : the_post(); ?>
				<!-- stocks-card -->
				<div class="stocks-card stocks__card">
					<a href="<?php the_permalink(); ?>">
						<h4 class="stocks-card__name"><?php the_title(); ?></h4>
						<div class="stocks-card__text">
							<?php the_excerpt(); ?>
						</div>
						<div class="stocks-card__info">
							<div class="stocks-card__detail">Подробнее</div>
							<span class="stocks-card__date"><?php the_date('j F Y'); ?> года</span>
						</div>
						<?php  if (get_post_meta($post->ID, 'salecheckbox', true)) {echo '<div class="stocks-card__flag">Акция</div>';} ?>
					</a>
				</div>
			<?php endwhile; ?>
			</div>
			<!-- /.stocks-wrap -->
		</div>
		<!-- /.stocks -->
	</div>
	<!-- /.container -->
</div>
<!-- /.content-block -->
<?php get_footer(); ?>