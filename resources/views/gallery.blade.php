{{--
  Template Name: Gallery
--}}

@extends('layouts.app_tight')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
  <div class="gallery-container">
  <?php if( have_rows('gallery') ): ?>
    <div class="gallery">
    <?php while( have_rows('gallery') ): the_row(); ?>
    <div class="gallery-image h-screen w-screen overflow-hidden">
        <?php $image = get_sub_field('image');#
        if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="w-full" />
      <?php endif; ?>
            </div>
    <?php endwhile; ?>
    
    </div>
<?php endif; ?>
</div>
@endsection
