{{--
  Template Name: Restaurant
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')
    <div class="container grid place-content-center mx-auto h-96 bg-okyo-black text-okyo-white font-sans font-normal bg-logo bg-no-repeat bg-center bg-[length:340px]">
      <h1 class="text-center">Einfach Ankommen</h1>
    </div>

  @endwhile
@endsection
