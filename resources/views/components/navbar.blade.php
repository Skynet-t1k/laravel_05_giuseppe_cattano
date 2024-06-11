
    <nav class="navbar navbar-expand-lg bg-transparent">
        <div class="container-fluid">
          <a class="navbar-brand" href=""><img class="logo" src="/media/logo.webp" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto">
              <a class="nav-link {{ Route::is('homepage') ? 'active' : '' }}" aria-current="page" href="{{route('homepage')}}">Home</a>
              <a class="nav-link {{ Route::is('servizi') ? 'active' : '' }}" href="{{route('servizi')}}">Servizi</a>
              <a class="nav-link {{ Route::is('chi_siamo') ? 'active' : '' }}" href="{{route('chi_siamo')}}">Chi Siamo</a>
              <a class="nav-link {{ Route::is('contattaci') ? 'active' : '' }}" href="{{route('contattaci')}}">Contattaci</a>
              </div>
          </div>
        </div>
      </nav>

