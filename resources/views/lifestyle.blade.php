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
            <main class="flex overflow-x-hidden hide-scroll-bar sticky top-10">
            <div class="inline-block px-3">
                    <div class="w-75vh h-80vh flex items-center flex-col justify-center">
                            <h1 class="anim-head"><?php the_field('headline'); ?></h1>
                            <h4 class="anim-head"><?php the_field('subhead'); ?></h4>
                    </div>
                </div>
    <?php while( have_rows('product') ) : the_row();
            $image = get_sub_field('image')
                ?>
                <div class="inline-block px-3 fade">
                    <div class="w-75vh">
                    <?php if( !empty( $image ) ): ?>
                        <img class="object-cover h-80vh w-75vh" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                        <div class="pt-4">
                            <p><?php the_sub_field('name'); ?></p>
                            <p><?php the_sub_field('art'); ?></p>
                        </div>
                    </div>
                </div>
        <?php endwhile; ?>
    </main>
    </div>
    </section>

<?php else :  ?>
<?php endif; ?>
  @endwhile
@endsection
