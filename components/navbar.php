<nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Ferretería La Bendición</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="#">Sucursales</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Precios</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Productos</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Herramientas</a></li>
            <li><a class="dropdown-item" href="#">Construcción</a></li>
            <li><a class="dropdown-item" href="#">Techos</a></li>
          </ul>
        </li>
          </ul>
          <div class="ms-auto"> 
              <?php if (isset($_SESSION['usuario_id'])): ?> 
              <div class="dropdown">
                  <a class="btn btn-danger" href="php/logout.php"> 
                  <i class="fa-solid fa-right-from-bracket"></i> Cerrar sesión</a> 
              <?php else: ?> 
                  <a class="btn btn-outline-primary me-2" href="login.html">Login</a> 
                  <a class="btn btn-primary" href="registro.html">Registrarse</a> 
              <?php endif; ?> 
          </div>
        </div>
      </div>
    </nav>