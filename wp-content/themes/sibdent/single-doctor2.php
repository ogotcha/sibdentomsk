<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
<?php get_sidebar(); ?>
<?php global $post; $currentidSinNews = $post->ID; ?>
<div class="content-block">
	<div class="container">
		<?php get_template_part( 'template-part/block', 'navbar' ); ?>
		<div class="specialists-single">
			<div class="specialists-portfolio specialists__portfolio">
				<div class="specialists-portfolio-wrap">
				
					<div class="specialists-portfolio-wrap__photo">
						<?php if ( has_post_thumbnail() ) {the_post_thumbnail('large');}?>
					</div>
					<div class="specialists-portfolio-wrap-block specialists-portfolio-wrap__block">
						<span class="specialists-portfolio-wrap-block__surname">
							<?php if (get_post_meta($post->ID, 'Familiya', true)) { echo get_post_meta($post->ID, 'Familiya', true); } ?>
						</span>
						<span class="specialists-portfolio-wrap-block__name">
							<?php the_title(); ?>
						</span>
						<span class="specialists-portfolio-wrap-block__job">
							<p><?php if (get_post_meta($post->ID, 'dolzhnost', true)) { echo get_post_meta($post->ID, 'dolzhnost', true); } ?></p>
						</span>
						<span class="specialists-portfolio-wrap-block__experience">
							Опыт работы в ООО "СибДент" 
							<?php if (get_post_meta($post->ID, 'opyt_raboty', true)) { echo get_post_meta($post->ID, 'opyt_raboty', true); } ?>
						</span>
						<a href="https://sibdentomsk.ru/raspisanie/" class="specialists-portfolio-wrap-block__btn btn">Записаться на прием</a>
					</div><!-- /specialists-portfolio-wrap-block -->
				</div><!-- /specialists-portfolio-block -->
				<div class="specialists-portfolio-info">
					<span class="specialists-portfolio__text">
						<?php the_content(); ?>
					</span> <!-- /.specialists-portfolio__text -->
				</div>
			</div><!-- /specialists-portfolio -->
		</div><!-- /specialists-single -->
		<?php if (get_post_meta($post->ID, 'sertifikaty', true)): ?>
		<div class="clinic-license">
			<h3 class="clinic-license__title">Сертификаты и награды</h3>
			<div class="clinic-license__wrap">
				<? echo do_shortcode(get_post_meta($post->ID, 'sertifikaty', true)); ?>
			</div><!-- /clinic-license-wrap -->
		</div><!-- /clinic-license -->
		<?php endif; ?>
		<div class="doctors specialists-single-doctors">
			<h3 class="doctors__title specialists-single-doctors__title">Другие специалисты на Малунцева, 25</h3>
			<div class="doctors__block">
				<?php
					$sinNewsNumbOf = 0;/*для счета количества выведенных постов*/
					$query = new WP_Query( array(
						'post_type' => 'doctor2',
						'posts_per_page' => 15,
						'order'   => 'ASC',
						'orderby' => 'menu_order'
					));
					if ( $query->have_posts() ) { while ( $query->have_posts() ) : $query->the_post();
				?>
				<?php $otherNewsSingleCurID = $post->ID; ?>
				<?php if ( ( $otherNewsSingleCurID !== $currentidSinNews ) && ( $sinNewsNumbOf !==3 ) ) { ?>
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
				<?php } ?>
				<?php endwhile; } wp_reset_postdata(); ?>
			</div><!-- /doctors-block -->
		</div>
	</div><!-- /container -->
</div><!-- /content-block -->
<?php endwhile; endif; ?>
<?php get_footer(); ?>