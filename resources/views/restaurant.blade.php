{{--
  Template Name: Restaurant
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')
    <section class="grid place-content-center mx-auto h-96 text-okyo-white font-sans font-normal bg-logo bg-no-repeat bg-center bg-[length:340px]">
      <h1 class="text-center text-3xl">Einfach Ankommen</h1>
    </section>
    
    <section class="text-center grid place-content-center h-96">
      <p class="2xl">Von Arbeitskollegen, zu Freunden, zu einer Familie. So individuell wie unser OKYO ist, so sind wir als Team.<br><br>Mit Hingabe, Liebe und Leidenschaft sind wir Ihr Ansprechpartner für unvergessliche Momente.</p>
    </section>

  @endwhile
@endsection
