<?php get_header(); ?>
<?php get_sidebar(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="content-block">
			<div class="container">
				<?php get_template_part('template-part/block', 'navbar'); ?>
				<div class="main">
					<div class="main-wrap">
						<div class="main-stocks">
							<div class="main-stocks-block">
								<?php if (wp_is_mobile()) { ?>
									<div class="main-stocks-slider introSlider-mobile ">
										<?php $posts = get_posts("post_type=sale&posts_per_page=3&orderby=date&order=DESC"); ?>
										<?php if ($posts) : foreach ($posts as $post) : setup_postdata($post); ?>
												<div class="main-stocks-slider__item">
													<div class="main-stocks-slider__img">
														<?php
														$image = get_field('mob_banner');
														if ($image) : $size = 'mob-thumb';
															$thumb = $image['sizes'][$size]; ?>
															<img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
														<?php endif; ?>
													</div>
													<div class="main-stocks-slider__wrap">
														<h1><?php the_title(); ?></h1>
														<div class="main-stocks-slider__subtitle"><?php the_content(); ?></div>
														<div class="main-stocks-slider__text"><?php the_excerpt(); ?></div>
													</div>
													<a href="https://sibdentomsk.ru/raspisanie/"></a>
													<button class="modal-btn sidebar-nav__btn btn " data-to-id="sale-form" onclick="ym(66919612,'reachGoal','zapisatsya'); return true;">Записаться</button>

                                                </div>
										<?php endforeach;
										endif; ?>
									</div>
								<?php } else { ?>
									<div class="main-stocks-slider introSlider-pc ">
										<?php $posts = get_posts("post_type=sale&posts_per_page=3&orderby=date&order=DESC"); ?>
										<?php if ($posts) : foreach ($posts as $post) : setup_postdata($post); ?>

												<div class="main-stocks-slider__item" style="background: url('<?php the_post_thumbnail_url(); ?>') 100% 100% / cover no-repeat">

													<!-- <div class="main-stocks-slider__img">

								</div> -->
													<div class="main-stocks-slider__wrap">
														<h1><?php the_title(); ?></h1>
														<div class="main-stocks-slider__subtitle"><?php the_content(); ?></div>
														<div class="main-stocks-slider__text"><?php the_excerpt(); ?></div>

													</div>
													<a href="https://sibdentomsk.ru/raspisanie/"></a>
                                                    <button class="modal-btn sidebar-nav__btn btn " data-to-id="sale-form" onclick="ym(66919612,'reachGoal','zapisatsya'); return true;">Записаться</button>



												</div>


										<?php endforeach;
										endif; ?>

									</div>
								<?php } ?>


								<ul class="main-stocks-block__text">
									<?php $posts = get_posts("post_type=sale&posts_per_page=3&orderby=date&order=DESC"); ?>
									<?php if ($posts) : foreach ($posts as $post) : setup_postdata($post); ?>
											<li>
												<?php the_title(); ?>
												<?php the_content(); ?>
											</li>
									<?php endforeach;
									endif; ?>
								</ul>
							</div>
						</div>
						<!-- /.stocks -->

					</div>
					<!-- /.main-wrap -->
				</div>

				<!-- /.main -->
				<div class="services">
					<h2 class="services__title title">Услуги</h2>
					<!-- /.services__title -->
					<div class="services__block">
						<div class="services-slider">
							<!-- /.services-slider -->
							<?php $posts = get_posts("post_type=service&posts_per_page=10&orderby=menu_order&order=DESC"); ?>
							<?php if ($posts) : foreach ($posts as $post) : setup_postdata($post); ?>
									<div class="services-card ">
										<a href="<?php echo get_post_meta($post->ID, 'ssylka_na_prajs', true); ?>">
											<div class="services-card__image">
												<?php if (has_post_thumbnail()) {
													the_post_thumbnail('medium');
												} ?>
											</div>
										</a>
										<div class="services-card__info">
											<h3 class="services-card__name"><?php the_title(); ?></h3>
											<a class="services-card__more" href="<?php echo get_post_meta($post->ID, 'ssylka_na_prajs', true); ?>">
												<span class="services-card__text">Цены</span>
												<div class="services-card__arrow">
													<img src="<?php echo get_template_directory_uri(); ?>/img/services/services-arrow.svg" alt="arrow">
												</div>
											</a>
										</div>
									</div>
							<?php endforeach;
							endif; ?>
						</div>
					</div>
					<!-- /.services-block -->
				</div>
				<!-- /.services -->
				<div class="main-side">
					<div class="specialist">
						<h3 class="specialist__title">Специалисты клиники</h3>
						<span class="specialist__name">Оксана Михайловна Войтенко<br>главный врач клиники
							<br />на ул. Химиков 34</span>
						<a class="specialist__link" href="<?php echo site_url(); ?>/doctor/">
							<span class="specialist__others">Специалисты клиники</span>
							<img class="specialist__arrow" src="<?php echo get_template_directory_uri(); ?>/img/others.svg" alt="">
						</a>
					</div>
					<!-- /.specialist -->
					<div class="reviews">
						<h3 class="reviews__title">Отзывы</h3>
						<div class="reviews-wrap">
							<div class="reviews-slider">
								<?php $posts = get_posts("post_type=review&posts_per_page=5&orderby=date&order=ASC"); ?>
								<?php if ($posts) : foreach ($posts as $post) : setup_postdata($post); ?>
										<div class="reviews-slider__item">
											<div class="reviews__text"><?php the_excerpt(); ?></div>
											<div class="reviews-slider-wrap">
												<div class="reviews-slider__image">
													<?php

													if (has_post_thumbnail()) {
														the_post_thumbnail('thumbnail', array(
															'class' => 'img-responsive  rounded-circle wp-post-image'
														));
													} else {
														echo '<img src="' . get_bloginfo("template_url") . '/img/user.png" />';
													} ?>
												</div>
												<div class="reviews-slider__text">
													<span class="reviews-slider__name"><?php the_title(); ?></span>
													<span class="reviews-slider__info"><?php echo get_the_date('d F Y'); ?> года</span>
												</div>
											</div>
										</div>
								<?php endforeach;
								endif; ?>

							</div>
						</div>
					</div>
					<!-- /.reviews -->
				</div>
				<!-- /.main-side -->
				<?php wp_reset_query(); ?>
				<div class="main-laboratory">
					<div class="main-laboratory-block">
						<h3 class="main-laboratory__title title">Зуботехническая лаборатория</h3>
						<div class="main-laboratory-about main-laboratory__about">
							<h3 class="main-laboratory-about__title title">Зуботехническая лаборатория</h3>
							<!-- <span class="main-laboratory-about__text">Лаборатория высоких технологий “Сибдент” - одна из
						крупнейших зуботехнических компаний Омска, в штате которой работают зубные техники -
						специалисты высокой квалификации, прошедшие обучение в России и за рубежом.</span>
					<p class="main-laboratory-about__text">Производственный комплекс лаборатории “Сибдент” оснащен
						самым современным оборудованием ведущих фирм мира и осуществляет полный цикл
						зуботехнических работ.</p>
					<span class="main-laboratory-about__technology">Среди ежедневно используемых технологий:</span>
					<ul class="main-laboratory-about__list">
						<li class="main-laboratory-about__item">фрезеровка по технологии CAD/CAM</li>
						<li class="main-laboratory-about__item">пресскерамика</li>
						<li class="main-laboratory-about__item">3D - прототипирование</li>
						<li class="main-laboratory-about__item">съемное протезирование</li>
						<li class="main-laboratory-about__item">ортодонтические аппараты</li>
						<li class="main-laboratory-about__item">традиционное литье</li>
					</ul>
					<span class="main-laboratory-about__text">При выполнении зуботехнических работ используется
						артикулятор различных систем.</span>
					<p class="main-laboratory-about__courier">Имеется курьерская служба.</p> -->
							<?php echo get_post_meta($post->ID, 'field-1', true); ?>
						</div>
						<!-- /.laboratory-block__about -->
						<div class="main-laboratory-block__image">
							<img src="<?php echo get_template_directory_uri(); ?>/img/laboratory.jpg" alt="лаборатория">
						</div>
					</div>
					<!-- /.laboratoty-block -->
				</div>
				<!-- /.laboratory -->
			</div>
			<!-- /.container -->
		</div>
		<!-- /.content-block -->
<?php endwhile;
endif; ?>

    <div class="popup" id="sale-form">
        <div class="popup__close">
            &times;
        </div>

        <div class="popup-form">
            <? echo do_shortcode('[contact-form-7 id="512" title="Запись с главной"]'); ?>
        </div>
    </div>


<?php get_footer(); ?>