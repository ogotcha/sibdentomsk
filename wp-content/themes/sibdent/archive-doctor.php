<?php get_header(); ?>
<?php get_sidebar(); ?>
<div class="content-block">
	<div class="container">
		<?php get_template_part( 'template-part/block', 'navbar' ); ?>
		<div class="specialists">
			<h3 class="specialists__title title"><?php post_type_archive_title(); ?> на Химиков,34</h3>
			<div class="doctors__block specialists__block">				
				<?php $posts = get_posts ("post_type=doctor&posts_per_page=30&orderby=menu_order&order=ASC"); ?> 
				<?php if ($posts) : foreach ($posts as $post) : setup_postdata ($post); ?>
					<a href="<?php the_permalink(); ?>" class="doctors-card doctors__card">
						<div class="doctors-card__image">
							<?php if ( has_post_thumbnail() ) {the_post_thumbnail('medium');}?>
						</div>
						<span class="doctors-card__name">
							<?php the_title(); echo '<br />'; if (get_post_meta($post->ID, 'Familiya', true)) { echo get_post_meta($post->ID, 'Familiya', true); } ?>
						</span>
						<span class="doctors-card__profession">
							<?php if (get_post_meta($post->ID, 'dolzhnost', true)) { echo get_post_meta($post->ID, 'dolzhnost', true); } ?>
						</span>
					</a>
				<?php endforeach; endif; ?>
			</div><!-- /doctors__block -->
			<br /><br />
			<h3 class="specialists__title title"><?php post_type_archive_title(); ?> на Малунцева,25</h3>
			<div class="doctors__block specialists__block">				
				<?php $posts = get_posts ("post_type=doctor2&posts_per_page=30&orderby=menu_order&order=ASC"); ?> 
				<?php if ($posts) : foreach ($posts as $post) : setup_postdata ($post); ?>
					<a href="<?php the_permalink(); ?>" class="doctors-card doctors__card">
						<div class="doctors-card__image">
							<?php if ( has_post_thumbnail() ) {the_post_thumbnail('medium');}?>
						</div>
						<span class="doctors-card__name">
							<?php the_title(); echo '<br />'; if (get_post_meta($post->ID, 'Familiya', true)) { echo get_post_meta($post->ID, 'Familiya', true); } ?>
						</span>
						<span class="doctors-card__profession">
							<?php if (get_post_meta($post->ID, 'dolzhnost', true)) { echo get_post_meta($post->ID, 'dolzhnost', true); } ?>
						</span>
					</a>
				<?php endforeach; endif; ?>
			</div><!-- /doctors__block -->


		</div><!-- /specialists -->
	</div><!-- /container -->
</div><!-- /content-block -->
<?php get_footer(); ?>