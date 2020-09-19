<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
<?php get_sidebar(); ?>
<div class="content-block">
	<div class="container">
		<?php get_template_part( 'template-part/block', 'navbar' ); ?>
		
		
		<div class="price">
			<h3 class="price__title title">Цены</h3>
				<div class="price-header">
					<h4 class="price__subtitle">Выберите услугу:</h4>
					<div class="price-header__menu">
						<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'theme_location' => 'price-menu' ) ); ?>
					</div>
				</div>
				<div class="price-ontent">
					<h2 class="price-content__title"><?php the_title(); ?></h2>
					<div class="price-content__table">
						<?php the_content(); ?>
					</div>
				</div><!-- /price-content -->
			</div>
			<!-- /.price-header -->
		</div>
		<!-- /.price -->
		
		
		
	</div>
	<!-- /.container -->
</div>
<!-- /.content-block -->
<?php endwhile; endif; ?>
<?php get_footer(); ?>