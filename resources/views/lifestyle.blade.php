{{--
  Template Name: Lifestyle
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')
    <?php if( have_rows('product') ): ?>
    <section> 
        <div class="sticky-container">
            <main class="flex overflow-x-hidden flex-col sm:flex-row hide-scroll-bar relative sm:sticky sm:top-28">
            <div class="inline-block sm:px-3">
                    <div class="sm:w-75vh sm:h-80vh pb-10 sm:pb-0 flex items-center flex-col justify-center">
                            <h1 class="anim-head"><?php the_field('headline'); ?></h1>
                            <h4 class="anim-head"><?php the_field('subhead'); ?></h4>
                    </div>
                </div>
    <?php while( have_rows('product') ) : the_row();
            
            $link = get_sub_field('link');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a href="<?php echo esc_url( $link_url ); ?>">
                        <?php $image = get_sub_field('image')
                    ?>
                <div class="inline-block px-3 pb-10 sm:pb-0 fade">
                    <div class="sm:w-75vh">
                    <?php if( !empty( $image ) ): ?>
                        <img class="object-cover h-80vh w-75vh" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                        <div class="pt-4">
                            <p><?php the_sub_field('name'); ?></p>
                            <p><?php the_sub_field('art'); ?></p>
                        </div>
                    </div>
                </div>
                        </a>
                    <?php endif; ?>
                    <?php 
                    $link = get_sub_field('link');
                    if( !$link ): ?>
                    <?php $image = get_sub_field('image')
                    ?>
                <div class="inline-block px-3 pb-10 sm:pb-0 fade">
                    <div class="sm:w-75vh">
                    <?php if( !empty( $image ) ): ?>
                        <img class="object-cover h-80vh w-75vh" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                        <div class="pt-4">
                            <p><?php the_sub_field('name'); ?></p>
                            <p><?php the_sub_field('art'); ?></p>
                        </div>
                    </div>
                </div>
                    <?php endif; ?>


    
        <?php endwhile; ?>
    </main>
    </div>
    </section>

<?php else :  ?>
<?php endif; ?>
  @endwhile
@endsection
