<header class="banner bg-okyo-black text-okyo-white flex py-10 items-center px-10">
  <div class="inline">
  <?php if ( function_exists( 'the_custom_logo' ) ) {
	the_custom_logo();
} ?>
</div>

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary ml-20" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  @endif
</header>
