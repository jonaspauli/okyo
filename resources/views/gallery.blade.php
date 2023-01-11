{{--
  Template Name: Gallery
--}}

@extends('layouts.app_tight')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile

<section class="container <?php echo $class_name ?>">
  <?php if( have_rows('gallery') ):
      $row = get_field('gallery');
      $i = 1;
    ?>
    <div class="flex flex-row flex-wrap mb-[15rem]">
        <?php while( have_rows('gallery') ): the_row();?>
        <?php
            if ($i % 2 != 0) {
            echo "<div class=\"w-full sm:w-1/2 sm:mr-[-2rem] sm:mb-[-10rem]\">";
            } else {
            echo "<div class=\"w-full sm:w-1/2 sm:mt-[15rem] sm:ml-[-2rem] sm:mb-[-10rem]\">";
            }
        ?>
            <div class="z-<?php echo $i ?>0 my-lg-4 mb-4 mb-lg-0 relative projekte-fade gallery-rellax">
            <?php $image = get_sub_field('image');#
        if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="w-full fade" />
      <?php endif; ?>
            </div>
        </div>
            <?php $i++; ?>
        <?php  endwhile;?>
    </div>

  <?php endif; ?>
</section>
@endsection
