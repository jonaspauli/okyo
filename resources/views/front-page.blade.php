{{--
  Template Name: Front Page
--}}

@extends('layouts.app_tight')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')
    <div class="icon-scroll"></div>
    <div class="scroll-wrap">
     <canvas class="okyo-scrolling"></canvas>
    </div>
    <?php if( have_rows('callout_1') ): ?>
          <?php while( have_rows('callout_1') ): the_row(); 
               ?>
              <div class="flex content-center justify-center first-callout">
                <h1 class="text-center tracking-tight w-2/3 drop-shadow-lg"><?php the_sub_field('text'); ?></h1>
              </div>
          <?php endwhile; ?>
      <?php endif; ?>

      <?php if( have_rows('callout_2') ): ?>
          <?php while( have_rows('callout_2') ): the_row(); 
          $link = get_sub_field('link');
               ?>
            <div class="flex flex-col second-callout">
              <div class="w-2/3 flex flex-col self-center">
                <h2 class="text-center tracking-tight text-3xl md:text-6xl drop-shadow-lg self-center pb-5"><?php the_sub_field('headline'); ?></h2>
                <p class="text-center self-center pb-5 md:text-2xl drop-shadow-lg font-medium"><?php the_sub_field('text'); ?></p>
                <?php 
                    $link = get_sub_field('link');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="bg-okyo-orange text-okyo-black w-72 py-3 self-center mb-16 text-center" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" style="font-size: 1rem"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                  
              </div>
            </div>
          <?php endwhile; ?>
      <?php endif; ?>

      <?php if( have_rows('callout_3') ): ?>
          <?php while( have_rows('callout_3') ): the_row(); 
          $link = get_sub_field('link');
               ?>
            <div class="flex flex-col third-callout">
              <div class="w-2/3 flex flex-col self-center">
                <h2 class="text-center tracking-tight text-2xl md:text-6xl  self-center pb-5 drop-shadow-lg"><?php the_sub_field('headline'); ?></h2>
                <p class="text-center self-center pb-5 md:text-2xl font-medium drop-shadow-lg"><?php the_sub_field('text'); ?></p>
                <?php 
                    $link = get_sub_field('link');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="bg-okyo-orange text-okyo-black w-72 py-3 self-center mb-16 text-center" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" style="font-size: 1rem"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
              </div>
            </div>
          <?php endwhile; ?>
      <?php endif; ?>

  @endwhile
@endsection