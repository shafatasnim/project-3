@php
  function checkRouteActive($route){
  if(Route::current()->uri == $route) return 'active';
}
@endphp


<div class="sidebar" data-color="purple" data-background-color="white">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo bg-dark">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini text-white">
          <img src="{{url('public')}}/assets/img/new_logo.png" style="border-radius: 50%;border:5px solid #9900cc;">
        </a>
        <a href="http://www.creative-tim.com" class="simple-text text-white logo-normal">
          Shafa Tasnim Narulita
        </a>
      </div>
      <div class="sidebar-wrapper bg-dark">
        <ul class="nav">
          <li class="nav-item  {{checkRouteActive('beranda')}}">
            <a class="nav-link" href="{{url('beranda')}}">
              <i class="material-icons"></i>
              <p class="text-white">Beranda</p>
            </a>
          </li>
          <li class="nav-item {{checkRouteActive('produk')}}">
            <a class="nav-link" href="{{url('produk')}}">
              <i class="material-icons"></i>
              <p class="text-white">Produk</p>
            </a>
          </li>
          <li class="nav-item {{checkRouteActive('kategori')}}">
            <a class="nav-link" href="{{url('kategori')}}">
              <i class="material-icons"></i>
              <p class="text-white">Kategori</p>
            </a>
          </li>
          <li class="nav-item {{checkRouteActive('promo')}}">
            <a class="nav-link" href="{{url('promo')}}">
              <i class="material-icons"></i>
              <p class="text-white">Promo</p>
            </a>
          </li>
          <!-- your sidebar here -->
        </ul>
      </div>