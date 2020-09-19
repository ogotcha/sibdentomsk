<?php get_header(); ?>
<?php get_sidebar(); ?>
<div class="content-block">
	<div class="container">



		<?php get_template_part( 'template-part/block', 'navbar' ); ?>


                <div class="review">
                    <h3 class="review__title title"><?php post_type_archive_title(); ?></h3>

					<!--
                    <h4 class="review__subtitle">Мы будем рады вашему отзыву</h4>					
                    <div class="review-block">
							<div class="review-block__photo">
								<img src="<?php //echo get_template_directory_uri(); ?>/img/review-photo.svg" alt="фото">
							</div>
							<div class="review-block__form">
								<form action="#" class="review-form">
									<input type="text" class="review-form__name" placeholder="Имя">
									<textarea class="review-form__text" name=""  cols="30" rows="10" placeholder="Текст отзыва"></textarea>
									<button class="review-form__button">Опубликовать</button>
								</form>
							</div>
                    </div>
					-->

					<div class="review-posts review__posts">
					
					
						<?php while ( have_posts() ) : the_post(); ?>
                            <div class="reviews-slider__item review-posts__single">
									<div class="reviews__text review-posts__text">
										 <?php the_excerpt(); ?>
									</div>
                                <div class="reviews-slider-wrap">
                                    <div class="reviews-slider__image">
																				<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/user.png" alt="user"> -->
																				<?php 
																				
																					if( has_post_thumbnail() ) {
																							the_post_thumbnail('thumbnail', array(
																									'class' => 'img-responsive  rounded-circle wp-post-image'
																									));
																					}
																					else {
																							echo '<img src="'.get_bloginfo("template_url").'/img/user.png" />';
																					} ?>
                                    </div>
                                    <div class="reviews-slider__text">
                                        <span class="reviews-slider__name"><?php the_title(); ?></span>
                                        <span class="reviews-slider__info"><?php echo get_the_date('d F Y'); ?> года</span>
                                    </div>
                                </div>
                            </div>
						<?php endwhile; ?>
						
						
					</div><!-- /review__posts -->
			
			</div><!-- /review -->
			
			
			
	
	</div>
	<!-- /.container -->
</div>
<!-- /.content-block -->
<?php get_footer(); ?>