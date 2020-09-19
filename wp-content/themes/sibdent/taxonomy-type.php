<?php get_header(); ?>
<?php $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy' )); ?>
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
				<div class="price-tabcontent">
					<?php	while ( have_posts() ) : the_post();	?>						
					<div class="price-panel">
						<div class="price-panel-heading">
							<span><?php the_title(); ?></span> <img src="<?php echo get_template_directory_uri(); ?>/img/triangle.svg" alt="">
						</div>
						<div class="price-panel-collapse">
								<?php the_content(); ?>
						</div><!-- /price-panel-collapse -->
					</div><!-- /price-panel -->
					<?php endwhile; ?>
				</div><!-- /price-tabcontent -->
			</div>
			<!-- /.price-header -->
		</div>
		<!-- /.price -->
	</div>
	<!-- /.container -->
</div>
<!-- /.content-block -->
<script src="<?php echo get_template_directory_uri(); ?>/js/tabs.js"></script>
<?php get_footer(); ?>