<?php
/*
Template Name: Поиск
*/
get_header();
?>
<?php get_sidebar(); ?>
<div class="content-block">
	<div class="container">
	<?php get_template_part( 'template-part/block', 'navbar' ); ?>
		<article>
			<div class="search-block">
				<h2 class="search-block__title title">Поиск</h2>
				<div class="row">
					<div class="search-content">
						<?php if ( have_posts() ) : ?>
						<?php /* Start the Loop */ ?>
						<?php while (have_posts()) : the_post(); ?>
                            <?php if ( get_post_type($post) != 'review' && get_post_type($post) != 'sale' && get_post_type($post) != 'service') : ?>
                                <?php get_template_part('searchcontent', get_post_format()); ?>
                            <?php endif; ?>
						<?php endwhile; ?>
						<?php else : ?>
						<div class="entry-content">
							<p><?php _e( 'К сожалению, по вашему запросу ничего не найдено. Попробуйте ввести другой запрос.' ); ?></p>
						</div><!-- entry-content -->
						<?php endif; ?>
					</div><!-- col -->
				</div><!-- row -->
			</div>
		</article>
	</div><!-- cont -->
</div>
<?php get_footer(); ?>