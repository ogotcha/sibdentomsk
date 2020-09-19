<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
<?php get_sidebar(); ?>
<div class="content-block">
	<div class="container">	
		<?php get_template_part( 'template-part/block', 'navbar' ); ?> 
		<article>
			<div class="clinic">
                    <div class="clinic-about clinic__about">
                        <h2 class="clinic-about__title title"><?php the_title(); ?></h2>
                        <div class="clinic-about-wrap">
                        <div class="clinic-about__text">
							 <?php the_content(); ?>
                        </div>
                       
                    </div>
                    </div>
                    <!-- /.clinic-about -->
						<?php if (get_post_meta($post->ID, 'liczenzii', true)): ?>
                    <div class="clinic-license">
                        <h3 class="clinic-license__title">Лицензии клиники </h3>
                        <div class="clinic-license__wrap">
								<?php echo do_shortcode(get_post_meta($post->ID, 'liczenzii', true)); ?>
                        </div>
                        <!-- /.clinic-license-wrap -->
                    </div>
						<?php endif; ?>
                    <!-- /.clinic-license -->
                    <div class="clinic-photos clinic__photos">
                        <h3 class="clinic-photos__title">Фото клиники</h3>
                        <div class="clinic-photos__wrap">
								<div class="clinic-photos__wrap__gallery">
									<?php echo do_shortcode(get_post_meta($post->ID, 'photo', true)); ?>
								</div>
                        </div>
                        <!-- /.clinic-photos__wrap -->
                    </div>
                    <!-- /.clinic-photos -->
                </div>
                <!-- /.clinic -->


		</article>
	</div>
	<!-- /.container -->
</div>
<!-- /.content-block -->
<?php endwhile; endif; ?>
<?php get_footer(); ?>