<div class="mb-5">
<nav class="navbar navbar-dark navbar-expand-lg fixed-top" style="background-color: #11012d">
    <div class="container-fluid">
        
      <a class="navbar-brand" href="">
        <img src={{ asset('picture/logox2.png') }} alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        VOX
        <span class="navbar-text">
          Sem Igual
        </span>
      </a>
  
      @auth
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('chamados.index') }}">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Painel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Ajuda</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
              Configurar
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('alvos.index') }}">Alvo de chamado</a></li>
              <li><a class="dropdown-item" href="{{ route('categorias.index') }}">Categoria de chamado</a></li>
              <li><a class="dropdown-item" href="{{ route('estados.index') }}">Estado de iteração</a></li>
              <li><a class="dropdown-item" href="{{ route('perfis.index') }}">Perfil de usuário</a></li>
              <li><a class="dropdown-item" href="{{ route('setores.index') }}">Setor de usuário</a></li>
              <li><a class="dropdown-item disabled" href="#">Usuário de sistema</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <form action="{{ route('logout') }}" method="post">
              @csrf
              <a href="{{ route('logout') }}" class="nav-link" 
              onclick="event.preventDefault();
              this.closest('form').submit();">
                Logout
              </a>              
  
            </form>
          </li>
        </ul>   
      </div>

      <div class="navbar-text justify-content-end navbar-collapse">
        {{-- Bem Vindo! {{ explode(' ',Auth::user()->nome)[0] }}   --}}
        Bem Vindo! {{ Auth::user()->nome }}  
      </div>
      @endauth
      
      @guest
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="{{ route('usuarios.create') }}" class="nav-link">Registrar</a>
          </li>
        </ul>
      
      @endguest
      
    </div>
  </nav>
</div>
