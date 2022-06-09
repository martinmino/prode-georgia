<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('dashboard')}}">
      <img  src="{{asset('/img/logo/logo.png')}}" width="45" height="50" class="d-inline-block align-text-top">
      </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    @auth
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('dashboard')?'active':''}}" aria-current="page" href="{{ route('dashboard')}}">Mis pronósticos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('positions')?'active':''}}" href="{{ route('positions')}}">Posiciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('regulation')?'active':''}}" href="{{ route('regulation')}}">Reglamento</a>
                </li>
                @if (Auth::user()->admin)
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('matches')?'active':''}}" href="{{ route('matches.index')}}">Partidos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('employee')?'active':''}}" href="{{ route('employee.index')}}">Empleados</a>
                </li>
                @endif
            </ul>
    @endauth

    @auth
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ route('profile.show') }}">Mi perfil</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}">Salir</a></li>
                </ul>
            </li>
        </ul>
    @else
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{ route('login') }}" class="nav-link">Ingresar</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('register')}}" class="nav-link">Registrarse</a>
            </li>
        </ul>
    @endauth
    </div>
  </div>
</nav>

