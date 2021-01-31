<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('inicio') }}">BlogApp</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item {{ setActivo('inicio') }}">
                <a class="nav-link " aria-current="page" href="{{ route('inicio') }}">Inicio</a>
            </li>
            <li class="nav-item {{ setActivo('post.index') }}">
                <a class="nav-link" href="{{ route('post.index') }}">Listado</a>
            </li>
            @if(auth()->check())
                <li class="{{ setActivo('post.create') }} nav-item">
                    <a class="nav-link" href="{{ route('post.create') }}">Nuevo post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                </li>
            @endif
        </ul>
      </div>
    </div>
  </nav>



