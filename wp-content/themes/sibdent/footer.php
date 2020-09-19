    </div>
    <!-- /.wrap -->
    <div class="overlay-1"></div>
    <!-- <div class="overlay">
        <div class="popup">
            <div class="popup__close">
                &times;
            </div>
            <h4 class="popup__title">Запись</h4>
            <div class="popup-form">
			<? echo do_shortcode('[contact-form-7 id="283" title="Запись"]'); ?>
            </div>
        </div>
    </div> -->

    <div id="search-win" class="modalwin text-center">
		<span class="modalclose">&times;</span><!-- close button --> 
		<?php get_search_form(); ?>
	</div>	
	<div class="overlay-search"></div><!-- overlay -->

	<?php wp_footer(); ?>	
 
<script src="//cdn.callibri.ru/callibri.js" type="text/javascript" charset="utf-8"></script>
	</body>

</html>