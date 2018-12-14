<!-- aqui começa o navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <a class="navbar-brand" href="principal.php"><strong><span class="badge badge-dark">OnTheline</span></strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="produtos.php">| <strong>Produtos </strong><span class="sr-only">(página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="usuario.php">| <strong>Usuário</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="categoria.php">| <strong>Categorias</strong></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          | Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="funcionario.php">Funcionários</a>
          <a class="dropdown-item" href="salvapessoa.php">Cadastro</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="teste.php">Algo mais aqui</a>
        </div>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>
  </div>
</nav>
<!-- aqui fecha o navbar -->