<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
<?php get_sidebar(); ?>
<div class="content-block">
	<div class="container">	
		<?php get_template_part( 'template-part/block', 'navbar' ); ?> 
		<article>
			<div class="">
                    <div class="clinic-about clinic__about">
                        <h2 class="clinic-about__title title"><?php the_title(); ?></h2>
                        <div class="clinic-about-wrap" style="max-width:94%;">

							 <?php the_content(); ?>

                                          </div>
                    </div>
                    <!-- /.clinic-about -->
					
                </div>
                <!-- /.clinic -->


		</article>
	</div>
	<!-- /.container -->
</div>
<!-- /.content-block -->
<?php endwhile; endif; ?>
<?php get_footer(); ?>