<footer class="content-info bg-okyo-black text-okyo-white py-10 items-center px-10">
    <div class="flex flex-col sm:flex-row justify-between text-xs sm:text-base">
        <div class="w-24">
        <?php if ( function_exists( 'the_custom_logo' ) ) {
	the_custom_logo();
} ?>
        </div>
        <div class="pt-10 sm:pt-0">
        <p>Copyright © 2022 OKYO. All rights reserved.</p>
        </div>
        <div>
            <a href="<?php echo get_site_url(); ?>/impressum">Impressum</a> | 
            <a href="<?php echo get_site_url(); ?>/datenschutz">Datenschutz</a>
        </div>
    </div>
</footer>
