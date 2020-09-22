<?php global $mytheme; ?>
<div class="container">
<div class="sidebar">

	<div class="sidebar-top">
		<div class="sidebar-top__image">
			<img src="<?php echo get_template_directory_uri(); ?>/img/eye.svg" alt="eye icon">
		</div>
		<span class="sidebar-top__text"><?php echo do_shortcode( '[bvi text="Версия для слабовидящих"]' ); ?></span>
	</div>
	
	<div class="sidebar__logo">
		<?php the_custom_logo(); ?>
	</div>
	<!-- /.sidebar__logo -->

<!--	
	<div class="sidebar-address sidebar-address__block">
		<div class="sidebar-dropdown">
			<div class="sidebar-address__mark">
				<img src="<?php echo get_template_directory_uri(); ?>/img/mark.svg" alt="">
			</div>
			<span class="sidebar-address__text"><span class="sidebar-address__text_show">г Омск, Химиков 34</span></span>
			<div class="sidebar-address__arrow arrow_down">
					<img class="sidebar-address__arrow_big" src="<?php echo get_template_directory_uri(); ?>/img/arrow-down.svg" alt="arrow-down">
					<img class="sidebar-address__arrow_small" src="<?php echo get_template_directory_uri(); ?>/img/triangle.svg" alt="arrow-down">
			</div>
		</div>
		<div class="sidebar-dropdown">
			<span class="sidebar-address__text sidebar-address__text_hide"><a href="https://malunceva.sibdentomsk.ru/">г Омск, Малунцева 25</a></span>
		</div>
	</div>
-->
	<!-- /.sidebar__address -->

	
	<div class="sidebar-nav">
		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'theme_location' => 'main-menu' ) ); ?>
		<?php if( !is_front_page() ): ?>		
		<a href="https://sibdentomsk.ru/raspisanie/"><button class="sidebar-nav__btn btn" onclick="return true;">Записаться</button> </a>
		 <?php endif; ?>
		 <!--
		<a class="search-btn" href="#" id="search">
			<svg width="20" height="21" viewBox="0 0 23 24" xmlns="http://www.w3.org/2000/svg">
				<path d="M22.6503 21.8602L16.9804 15.9194C18.4382 14.1735 19.237 11.9768 19.237 9.68999C19.237 4.34701 14.922 0 9.61849 0C4.31494 0 0 4.34701 0 9.68999C0 15.033 4.31494 19.38 9.61849 19.38C11.6095 19.38 13.5069 18.775 15.1291 17.6265L20.842 23.6124C21.0808 23.8622 21.402 24 21.7462 24C22.0719 24 22.381 23.8749 22.6156 23.6474C23.1141 23.1641 23.13 22.3628 22.6503 21.8602ZM9.61849 2.52782C13.5387 2.52782 16.7278 5.74069 16.7278 9.68999C16.7278 13.6393 13.5387 16.8522 9.61849 16.8522C5.69833 16.8522 2.50917 13.6393 2.50917 9.68999C2.50917 5.74069 5.69833 2.52782 9.61849 2.52782Z" fill="#fff" fill-opacity="1"/>
			</svg>
		</a>
	-->
	</div>
	<!-- /.sidebar-nav -->
	<div class="sidebar-bottom ">
		<div class="sidebar-bottom__phone">
			<div style="margin:0 0 5px 40px">Химиков,34</div>
			<a phone href="tel:<?php echo $mytheme['phone'] ?>" onclick="ym(66919612,'reachGoal','zvonok-sidebar'); return true;"><?php echo $mytheme['phone'] ?></a>
			<div style="margin:20px 0 5px 40px">Малунцева, 25</div>
			<a phone href="tel:+7(3812)22-43-03" onclick="return true;">+7 (3812) 22-43-03</a>
		</div>
		<!-- /.slider-bottom__phone -->
		<p class="sidebar-bottom__text">&copy; ООО &laquo;СибДент&raquo;</p>
		<p class="sidebar-bottom__text"><a href="<?php echo site_url(); ?>/privacy">Политика конфиденциальности</a></p>
		<p class="sidebar-bottom__text"><a href="https://laikaweb.ru/" target="_blank">Веб-студия LAIKA</a></p>
		<!-- /.slider-bottom__text -->
	</div>
	<!-- /.sidebar-bottom -->
</div>
<!-- /.sidebar -->		
</div>
