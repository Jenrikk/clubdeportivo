<nav class="navbar navbar-light navbar-expand-sm bg-white shadow-sm">
	<div class="container">
		<button class="navbar-toggler" type="button"
			data-toggle="collapse"
			data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent"
			aria-expanded="false"
			aria-label="{{ __('Toggle navigation') }}">
				<span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar left -->
			<ul class="nav">
				<li class="nav-item {{ setActive('home') }}">
					<a class="nav-link" href="{{ route('home') }}">HOME</a>
				</li>
				{{-- <li class="nav-item {{ setActive('about') }}">
					<a class="nav-link" href="{{ route('about') }}">ABOUT</a>
				</li> --}}
				<li class="nav-item {{ setActive('projects.index') }}">
					<a class="nav-link" href="{{ route('projects.index') }}">PROYECTOS</a>
				</li>
				{{-- <li class="nav-item {{ setActive('contact') }}">
					<a class="nav-link" href="{{ route('contact') }}">CONTACTO</a>
				</li> --}}
			</ul>

            <!-- Navbar right -->
            <ul class="nav ml-auto">
                @guest
                    <li class="nav-item {{ setActive('login') }}">
                        <a class="nav-link" href="{{ route('login') }}">LOGIN</a>
                    </li>
                @else
                    @if (auth()->user()->role->key === 'admin' or auth()->user()->role->key === 'staff')
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión</a>
                            </div>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a href="#" class="dropdown-item">Clases</a>
                                <a href="#" class="dropdown-item">Espacios</a>
                                <a href="#" class="dropdown-item">Reservas</a>
                                <a href="#" class="dropdown-item">Perfil</a>

                                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión</a>

                            </div>
                        </li>
                        {{-- <li>
                            <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión</a>
                        </li> --}}
                    @endif
                @endguest
            </ul>
		</div>
	</div>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
