<x-memberAreaMain specialPage=true>
  @push('script')
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  @endpush

  <div class="flex justify-center items-center min-h-screen">
    <div id="app" class="">
      <header-component></header-component>
      {{-- <example-component></example-component> --}}
      <router-view></router-view>
      <footer-component></footer-component>
    </div>
  </div>
</x-memberAreaMain>