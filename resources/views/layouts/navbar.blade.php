<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top shadow-lg p-3 mb-5 bg-body-tertiary rounded">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Tecno Pro</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link" href="{{ url('painel/home') }}">Home</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Intranet de Comunicação
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('intracom/create_intranet_comunicacao') }}">Criar Comunicado</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('intracom/show_intranet_comunicacao') }}">Lista de Comunicados</a>
            </li>
            </ul>
          </li> 
      
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tarefa
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('tarefa/create') }}">Criar Tarefa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('tarefa/show') }}">Lista de tarefa</a>
            </li>
            </ul>
          </li>   
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Cliente
            </a>
            
          </li>   

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Financeiro
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Cadastro de despesa</a></li>
              <li><a class="dropdown-item" href="#">Cadastro de receita</a></li>
              
            </ul>
          </li>      
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Logistica
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Estoque de Almoxerifado</a></li>
              <li><a class="dropdown-item" href="#">Cadastrar estoque no almoxerifado</a></li>
              <li><a class="dropdown-item" href="#">Criar pedido no almoxerifado</a></li>
              <li><a class="dropdown-item" href="#">Lista de pedidos almoxerifado</a></li>
              <li><a class="dropdown-item" href="#">Pedido de compra no almoxerifado</a></li>
              <li><a class="dropdown-item" href="#">Lista de compra no almoxerifado</a></li>

            </ul>
          </li>      
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Configurações
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Perfil</a></li>
              <li><a class="dropdown-item" href="#">APIs</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Sair</a></li>
            </ul>
          </li>      
        </ul>

       
        
      </div>
    </div>
  </nav>