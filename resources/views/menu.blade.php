{{--
  Template Name: Menu
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    <div class="px-2 sm:px-0">
    <h1 class="anim-head"><?php the_field('headline') ?></h1>
<table class="mx-auto mb-20 mt-10 fade">
  <?php
// Check rows existexists.
if( have_rows('karte') ): ?>
    <?php while( have_rows('karte') ) : the_row(); ?>
    <tr>

        <td class="text-3xl font-semibold py-2 pr-10">
          <?php the_sub_field('name'); ?>
        </td> 
        <td class="text-lg py-2">
          <?php the_sub_field('uhrzeit'); ?>
        </td> 

        </tr>


    <?php endwhile; ?>
<?php else :
    // Do something...
endif;

?>
</table>
<?php
// Check rows existexists.
if( have_rows('karte') ): ?>
    <?php while( have_rows('karte') ) : the_row(); ?>
          <h2 class="fade mt-40 sm:mt-0"><?php the_sub_field('name'); ?></h2>
          <h4 class="text-center fade"><?php the_sub_field('uhrzeit'); ?></h4>
          <?php
              // Check rows existexists.
              if( have_rows('gang') ): ?>
                  <?php while( have_rows('gang') ) : the_row(); ?>
                  <div class="container mt-20 fade">
                  <div class="flex flex-col sm:flex-row">
                    <div class="sm:basis-1/4">
                      <h4 class="uppercase tracking-wide mb-10 sm:mb-0"><?php the_sub_field('name'); ?></h4>
                    </div>
                    <div class="sm:basis-3/4">

                        <?php
                            // Check rows existexists.
                            if( have_rows('gericht') ): ?>
                                <?php while( have_rows('gericht') ) : the_row(); ?>
                                  <div class="flex flex-row mb-10">
                                    <div class="sm:basis-3/4 w-full">
                                      <p class="font-semibold text-2xl sm:text-3xl mb-3"><?php the_sub_field('name'); ?></p>
                                      <p class="leading-relaxed"><?php the_sub_field('zutaten'); ?></p>
                                    </div>
                                    <div class="sm:basis-1/4">
                                      <p class="text-right"><?php the_sub_field('preis'); ?></p>
                                    </div>
                                  </div>
                                <?php endwhile; ?>
                                
                            <?php else :
                                // Do something...
                            endif; ?>
                           </div>
                           </div>
                           </div>
                          
                  <?php endwhile; ?>
              <?php else :
                  // Do something...
              endif; ?>
               <?php
                            $textband = get_field('textband');
                            if( $textband ): ?>
                            <div class="textband my-20 sm:my-40" speed=10>
                              <div class='scrolling-text'>
                                <a href="<?php echo esc_url( $textband['link']['url'] ); ?>" class="scrolling-text-content"><span><?php echo $textband['text']; ?></span></h2></a>
                              </div>
                            </div>
                                
                                <style type="text/css">
                                
                                  .textband {
                                    position: relative;
                                    width: 100vw;
                                    overflow: hidden;
                                  }

                                  .scrolling-text {
                                    display: inline-block;
                                    transition: transform 0.5s cubic-bezier(0.23, 0.36, 0.28, 0.83);
                                    will-change: transform;
                                    backface-visibility: hidden;
                                  }

                                  .scrolling-text .scrolling-text-content {
                                    color: #F3F1EC;
                                    font-size: 5rem;
                                    white-space: nowrap;
                                    transition: transform 0.5s cubic-bezier(0.23, 0.36, 0.28, 0.83);
                                    line-height: 1em;
                                    margin: 50px 0;
                                  }

                                  @media (max-width: 640px) {
                                    .scrolling-text .scrolling-text-content {
                                    font-size: 4rem;
                                  }
                                  }

                                </style>
                            <?php endif; ?>
    <?php endwhile; ?>
    
<?php else :
    // Do something...
endif;

?>

</div>



  @endwhile
@endsection
