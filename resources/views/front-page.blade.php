{{--
  Template Name: Front Page
--}}

@extends('layouts.app_tight')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')
    <div class="scroll-wrap">
    <canvas class="okyo-scrolling"></canvas>
    </div>
    <div class="flex content-center justify-center first-callout">
      <h1 class="text-center tracking-tight text-4xl w-2/3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </h1>
    </div>
    <div class="flex flex-col content-center justify-center second-callout">
      <h1 class="text-center tracking-tight text-4xl w-2/3 self-center pb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </h1>
      <a class="bg-okyo-orange text-okyo-black w-72 py-3 self-center mb-16 text-center" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" style="font-size: 1rem"><?php echo esc_html( $link_title ); ?>Jetzt Reservieren</a>
    </div>
    <div class="flex flex-col content-center justify-center third-callout">
      <h1 class="text-center tracking-tight text-4xl w-2/3 self-center pb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </h1>
      <a class="bg-okyo-orange text-okyo-black w-72 py-3 self-center mb-16 text-center" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" style="font-size: 1rem"><?php echo esc_html( $link_title ); ?>Jetzt Reservieren</a>
    </div>
    </div>
    </div>

  @endwhile
@endsection
