<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Laravel 8 </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link{{ request()->is('homepage') ? ' active' : '' }}" aria-current="page" href="/homepage">Homepage</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('contact') ? ' active' : '' }}" href="/contact">contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('about') ? ' active' : '' }}" href="/about">about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('login') ? ' active' : '' }}" href="/login">login</a>
        </li>
    </div>
  </div>
</nav>