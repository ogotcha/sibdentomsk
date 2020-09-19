<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
<?php get_sidebar(); ?>
<div class="content-block">
	<div class="container">
		<?php get_template_part( 'template-part/block', 'navbar' ); ?>
				<div class="stocks-single">
                    <h3 class="stocks-single__title title"><?php the_title(); ?></h3>
                    <span class="stocks-single__date"><?php the_date('j F Y'); ?> года</span>
                    <div class="stocks-single-wrap">
                        <div class="stocks-single__text">
								<div>
									<?php the_excerpt(); ?>
								</div>
								<div>
									<?php the_content(); ?>								
								</div>
								<div>
									<?php echo get_field('podrobnoe_opisanie'); ?>
								</div>
												</div>
												<button class="sidebar-nav__btn btn modal-btn" data-to-id="<?= $post->ID ?>">Записаться</button>
										


					<div class="popup"  id="<?= $post->ID ?>">
            <div class="popup__close">
                &times;
            </div>
						
            <div class="popup-form">
			<? echo do_shortcode('[contact-form-7 id="283" title="Запись"]'); ?>
            </div>
        </div>
                        <div class="stocks-single__more">

		<?php
			global $post;
			$currentidSinNews = $post->ID;
		?>
							<?php
								$sinNewsNumbOf = 0;/*для счета количества выведенных постов*/
								$query = new WP_Query( array(
									'post_type' => 'sale',
									'posts_per_page' => 4,/*вообще надо 3, но 1 запасной, без него нельзя(для того, чтобы в этой секции не выводился пост текущей страницы, иными словами: может случиться таккая ситуация, что кол-во итераций будет равно 3, а кол-во выведенных постов только 2 тк условие ниже отсеит один пост, потому,что его id совпадает с id текущей страницы, поэтому, чтобы при любой ситуации вывелось 3 поста, ставим 4(кол-во итераций))*/
									'order'   => 'ASC',
									'orderby' => 'date'
									) );
								if ( $query->have_posts() ) { while ( $query->have_posts() ) : $query->the_post();
							?>
									<?php
										$otherNewsSingleCurID = $post->ID;
									?>
									<?php if ( ( $otherNewsSingleCurID !== $currentidSinNews ) && ( $sinNewsNumbOf !==3 ) ) { ?>

								
                            <div class="stocks-card stocks__card stocks-single-card">
                                <a href="<?php the_permalink(); ?>">
                                    <h4 class="stocks-card__name"><?php the_title(); ?></h4>
                                    <div class="stocks-card__text"><?php the_excerpt(); ?></div>
                                    <div class="stocks-card__info">
                                        <div class="stocks-card__detail">Подробнее</div>
                                        <span class="stocks-card__date"><?php the_date('j F Y'); ?> года</span>
                                        <div class="stocks-card__flag">Акция</div>
                                    </div>
                                </a>
                            </div>

									<?php } ?>
							<?php endwhile;
								}
								wp_reset_postdata();
							?>



                        </div>
                    </div>
                    <!-- /.stocks-single-wrap -->
                </div>
                <!-- /.stocks -->


	</div>
	<!-- /.container -->
</div>
<!-- /.content-block -->
<?php endwhile; endif; ?>
<?php get_footer(); ?>