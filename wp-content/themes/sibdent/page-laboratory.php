<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
<?php get_sidebar(); ?>
<div class="content-block">
	<div class="container">
		<?php get_template_part( 'template-part/block', 'navbar' ); ?>



<div class="laboratory">
                    <h3 class="laboratory__title title"><?php the_title(); ?></h3>
                    <!-- <div class="laboratory-receive laboratory__receive">
                        <h4 class="laboratory__subtitle">Мы принимаем</h4>
                        <div class="laboratory-receive-block">
                            <div class="laboratory-receive-col">
                                    <span class="laboratory-receive__title">От докторов:</span>
                                    <ul class="laboratory-receive__text">
                                        <li>слепок</li>
                                        <li> регистрат прикуса </li>
                                        <li>диагностическая модель</li>
                                        <li>показания лицевой дуги</li>
                                        <li>фото пациента</li>
                                    </ul>
                            </div>
                            <div class="laboratory-receive-col">
                                    <span class="laboratory-receive__title">От техников:</span>
                                    <ul class="laboratory-receive__text">
                                        <li>рабочая мастер-модель (полностью разборная)</li>
                                        <li> восковое моделирование на разборной модели </li>
                                        
                                    </ul>
                            </div>
                            <div class="laboratory-receive-col">
                                    <span class="laboratory-receive__title">Уважаемый Доктор!</span>
                                    <div class="laboratory-receive__text">Лаборатория предоставляет вам возможность воспользоваться кабинетом по подбору цвета. Направляйтек нам пациентов - и наши лучшие специалисты по эстетике помогут Вам быстро и точноподобрать/скорректировать цвет зуботехнической реставрации.</div>
                            </div>
                        </div>
                    </div>
                    <div class="laboratory-use laboratory__use">
                        <h4 class="laboratory__subtitle">Мы работаем</h4>
                        <span class="laboratory-receive__text">Мы используем традиционные и современные высокие технологии <br> для исполнения вашего закза</span>
                        <ul class="laboratory-receive__text laboratory-use__text">
                            <li>CAD/CAM</li>
                            <li>Пресскерамика</li>
                            <li>Литье</li>
                            <li>3D прототипирование</li>
                        </ul>
                        <span class="laboratory-receive__text laboratory-use__post">На работы, выполненные нашей лабораторией, предоставляется гарантия 1 год.</span>
                    </div>
                    <div class="laboratory-get">
                            <h4 class="laboratory__subtitle">Вы получаете</h4>
                            <ul class="laboratory-receive__text laboratory-get__text">
                                <li>временные конструкции</li>
                                <li>металлокерамика</li>
                                <li>диоксид циркония</li>
                                <li>цельнокерамические реставрации</li>
                                <li>работы на имплантах</li>
                                <li>бюгельные и съемные протезы</li>
                                <li>каркасы</li>
                            </ul>
                    </div> -->
                    <?php the_content(); ?>
                    <div class="clinic-photos clinic__photos">
                        <h3 class="laboratory-photos__title">Фото лаборатории</h3>
                        <div class="laboratory-photos__wrap">					
								<div class="clinic-photos__wrap__gallery">
									<?php echo do_shortcode(get_post_meta($post->ID, 'photo', true)); ?>
								</div>
                        </div>
                        <!-- /.clinic-photos__wrap -->
                    </div>
                    <!-- /.clinic-photos -->
                </div>
                <!-- /.laboratory -->

	</div>
	<!-- /.container -->
</div>
<!-- /.content-block -->
<?php endwhile; endif; ?>
<?php get_footer(); ?>