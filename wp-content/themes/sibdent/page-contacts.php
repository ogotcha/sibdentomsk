<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
<?php get_sidebar(); ?>
<?php get_template_part( 'template-part/block', 'navbar' ); ?>
<div class="content-block">
	<div class="container">
		<div class="contacts">
			<!--<h3 class="contacts__title title"><?php the_title(); ?></h3>-->
			<h3 class="contacts__title title">Химиков, 34</h3>
			<!--Контакты Химиков-->
			<div class="contacts-wrap contacts__block">
				<div class="contacts-item contacts__item contacts-address">
					<div class="contacts-item__image">
						<img src="<?php echo get_template_directory_uri(); ?>/img/contacts/time.svg" alt="time">
					</div>
					<span class="contacts-item__info contacts-item__time">
						<?php if (get_post_meta($post->ID, 'rezhim_raboty_po_budnyam', true)) { echo get_post_meta($post->ID, 'rezhim_raboty_po_budnyam', true); } ?>
						<br>
						<?php if (get_post_meta($post->ID, 'rezhim_raboty_po_vyhodnym', true)) { echo get_post_meta($post->ID, 'rezhim_raboty_po_vyhodnym', true); } ?>
					</span>
				</div>
				<!-- /.contacts-item -->
				<?php if (get_post_meta($post->ID, 'adres', true)): ?>
				<div class="contacts-item contacts__item">
					<div class="contacts-item__image">
						<img src="<?php echo get_template_directory_uri(); ?>/img/contacts/address.svg" alt="address">
					</div>
					<span class="contacts-item__info">
						<?php echo get_post_meta($post->ID, 'adres', true); ?>
					</span>
				</div>
				<!-- /.contacts-item -->
				<?php endif; ?>
				
				
				<?php if (get_post_meta($post->ID, 'telefon', true)): ?>
				<div class="contacts-item contacts__item">
					<div class="contacts-item__image">
						  <img src="<?php echo get_template_directory_uri(); ?>/img/contacts/phone.svg" alt="phone">
					</div>
					<span class="contacts-item__info contacts-item__time">					
						<a href="tel:<?php echo get_post_meta($post->ID, 'telefon', true); ?>" onclick="ym(66919612,'reachGoal','call-kontakty'); return true;" class="contacts-item__info contacts-item__phone" >
							 <?php echo get_post_meta($post->ID, 'telefon', true); ?> 
						</a>
						<?php if (get_post_meta($post->ID, 'dopolnitelnyj_telefon', true)): ?>
						<br />
						<a href="tel:<?php echo get_post_meta($post->ID, 'dopolnitelnyj_telefon', true); ?>" onclick="return true;" class="contacts-item__info contacts-item__phone">
							 <?php echo get_post_meta($post->ID, 'dopolnitelnyj_telefon', true); ?> 
						</a>
						<?php endif; ?>
					</span>
				</div>
				<!-- /.contacts-item -->
				<?php endif; ?>
				
				<?php if (get_post_meta($post->ID, 'telefon', true)): ?>
				<div class="contacts-item contacts__item ">
					<div class="contacts-item__image contacts-item__mail">
						<img src="<?php echo get_template_directory_uri(); ?>/img/contacts/mail.svg" alt="mail">
					</div>
					<a href="mailto:<?php echo get_post_meta($post->ID, 'e-mail', true); ?>" class="contacts-item__info" target="_blank">
						<?php echo get_post_meta($post->ID, 'e-mail', true); ?>
					</a>
				</div>
				<!-- /.contacts-item -->
				<?php endif; ?>
			</div>
			<!-- /.contacts-wrap -->
		</div>
		<!-- /.contacts -->
	</div>
	<!-- /.container -->
	<?php if (get_post_meta($post->ID, 'karta', true)): ?>
		<div class="contacts-map">
			<div class="map" id="map"  style="height:400px;">
				<?php echo get_post_meta($post->ID, 'karta', true); ?>
			</div>
		</div>	
	<?php endif; ?>
</div>
<!-- /.content-block -->

<div class="content-block">
	<div class="container">
		<div class="contacts">
			<!--<h3 class="contacts__title title"><?php the_title(); ?></h3>-->
			<h3 class="contacts__title title">Малунцева, 25</h3>
			<!--Контакты Химиков-->
			<div class="contacts-wrap contacts__block">
				<div class="contacts-item contacts__item contacts-address">
					<div class="contacts-item__image">
						<img src="<?php echo get_template_directory_uri(); ?>/img/contacts/time.svg" alt="time">
					</div>
					<span class="contacts-item__info contacts-item__time">
						<?php if (get_post_meta($post->ID, 'rezhim_raboty_po_budnyam_malunczeva', true)) { echo get_post_meta($post->ID, 'rezhim_raboty_po_budnyam', true); } ?>
						<br>
						<?php if (get_post_meta($post->ID, 'rezhim_raboty_po_vyhodnym_malunczeva', true)) { echo get_post_meta($post->ID, 'rezhim_raboty_po_vyhodnym', true); } ?>
					</span>
				</div>
				<!-- /.contacts-item -->
				<?php if (get_post_meta($post->ID, 'adres', true)): ?>
				<div class="contacts-item contacts__item">
					<div class="contacts-item__image">
						<img src="<?php echo get_template_directory_uri(); ?>/img/contacts/address.svg" alt="address">
					</div>
					<span class="contacts-item__info">
						<?php echo get_post_meta($post->ID, 'adres_malunczeva', true); ?>
					</span>
				</div>
				<!-- /.contacts-item -->
				<?php endif; ?>
				
				
				<?php if (get_post_meta($post->ID, 'telefon', true)): ?>
				<div class="contacts-item contacts__item">
					<div class="contacts-item__image">
						  <img src="<?php echo get_template_directory_uri(); ?>/img/contacts/phone.svg" alt="phone">
					</div>
					<span class="contacts-item__info contacts-item__time">					
						<a href="tel:<?php echo get_post_meta($post->ID, 'telefon_malunczeva', true); ?>" onclick="return true;" class="contacts-item__info contacts-item__phone" >
							 <?php echo get_post_meta($post->ID, 'telefon_malunczeva', true); ?> 
						</a>
						<?php if (get_post_meta($post->ID, 'dopolnitelnyj_telefon_malunczeva', true)): ?>
						<br />
						<a href="tel:<?php echo get_post_meta($post->ID, 'dopolnitelnyj_telefon_malunczeva', true); ?>" onclick="return true;" class="contacts-item__info contacts-item__phone">
							 <?php echo get_post_meta($post->ID, 'dopolnitelnyj_telefon_malunczeva', true); ?> 
						</a>
						<?php endif; ?>
					</span>
				</div>
				<!-- /.contacts-item -->
				<?php endif; ?>
				
				<?php if (get_post_meta($post->ID, 'telefon', true)): ?>
				<div class="contacts-item contacts__item ">
					<div class="contacts-item__image contacts-item__mail">
						<img src="<?php echo get_template_directory_uri(); ?>/img/contacts/mail.svg" alt="mail">
					</div>
					<a href="mailto:<?php echo get_post_meta($post->ID, 'e-mail', true); ?>" class="contacts-item__info" target="_blank">
						<?php echo get_post_meta($post->ID, 'e-mail', true); ?>
					</a>
				</div>
				<!-- /.contacts-item -->
				<?php endif; ?>
			</div>
			<!-- /.contacts-wrap -->
		</div>
		<!-- /.contacts -->
	</div>
	<!-- /.container -->
	<?php if (get_post_meta($post->ID, 'karta', true)): ?>
		<div class="contacts-map">
			<div class="map" id="map"  style="height:400px;">
				<?php echo get_post_meta($post->ID, 'karta_2', true); ?>
			</div>
		</div>	
	<?php endif; ?>
</div>
<!-- /.content-block -->

<?php endwhile; endif; ?>
<?php get_footer(); ?>