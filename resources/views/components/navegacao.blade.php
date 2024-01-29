<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ route('painel.index') }}">
            <span data-feather="home" class="align-text-bottom"></span>
            Peinel
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('venda.index') }}">
            <span data-feather="file" class="align-text-bottom"></span>
            Vendas
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('produto.index')}}">
            <span data-feather="shopping-cart" class="align-text-bottom"></span>
            Produtos
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('cliente.index') }}">
            <span data-feather="users" class="align-text-bottom"></span>
            Clientes
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('usuario.index') }}">
            <span data-feather="users" class="align-text-bottom"></span>
            Usuários
          </a>
        </li>
    
      </ul>
     </div>
  </nav>