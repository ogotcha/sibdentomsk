<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   <div class="searchresult">
		<div class="searchresult-item">
			<p class="searchresult-item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
			<div class="searchresult-item-text">
				<?php the_excerpt(); ?>
			</div><!-- searchTxt -->
		</div><!-- searchresultitemcontent -->
	</div><!-- searchresultitem -->
</div>