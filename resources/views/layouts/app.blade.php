<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

@include('sections.header')

  <main id="main" class="main bg-okyo-black text-okyo-white py-20">
    @yield('content')


    <script src="https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js"></script>
  </main>

  @hasSection('sidebar')
    <aside class="sidebar">
      @yield('sidebar')
    </aside>
  @endif

@include('sections.footer')
