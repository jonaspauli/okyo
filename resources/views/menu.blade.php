{{--
  Template Name: Menu
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
<table class="mx-auto">
  <?php
// Check rows existexists.
if( have_rows('karte') ): ?>
    <?php while( have_rows('karte') ) : the_row(); ?>
    <tr>

        <td>
          <?php the_sub_field('name'); ?>
        </td> 
        <td>
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
          <h3><?php the_sub_field('name'); ?></h3>
          <h4 class="text-center"><?php the_sub_field('uhrzeit'); ?></h4>
          <?php
              // Check rows existexists.
              if( have_rows('gang') ): ?>
                  <?php while( have_rows('gang') ) : the_row(); ?>
                  <div class="flex flex-row">
                  <div class="basis-1/4"><h4><?php the_sub_field('name'); ?></h4></div>
                  <div class="basis-3/4">

                        <?php
                            // Check rows existexists.
                            if( have_rows('gericht') ): ?>
                                <?php while( have_rows('gericht') ) : the_row(); ?>
                                  <div class="flex flex-row">
                                    <div class="basis-3/4">
                                      <p class="font-semibold text-3xl"><?php the_sub_field('name'); ?></p>
                                      <p><?php the_sub_field('zutaten'); ?></p>
                                    </div>
                                    <div class="basis-1/4">
                                      <p><?php the_sub_field('preis'); ?></p>
                                    </div>
                                  </div>
                                <?php endwhile; ?>
                                
                            <?php else :
                                // Do something...
                            endif; ?>
                           </div>
                           </div>
                           <?php
                            $textband = get_field('textband');
                            if( $textband ): ?>
                            <div class="container" speed=30>
                              <div class='scrolling-text'>
                                <a href="<?php echo esc_url( $textband['link']['url'] ); ?>" class="scrolling-text-content"><span><?php echo $textband['text']; ?></span></h2></a>
                              </div>
                            </div>
                                
                                <style type="text/css">
                                
                                  .container {
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
                                    font-size: 120px;
                                    white-space: nowrap;
                                    transition: transform 0.5s cubic-bezier(0.23, 0.36, 0.28, 0.83);
                                    line-height: 1em;
                                    margin: 50px 0;
                                  }

                                </style>
                            <?php endif; ?>
                  <?php endwhile; ?>
              <?php else :
                  // Do something...
              endif;

              ?>
    <?php endwhile; ?>
<?php else :
    // Do something...
endif;

?>




  @endwhile
@endsection
