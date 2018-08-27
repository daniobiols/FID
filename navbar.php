<nav class="row nav-color navbar navbar-expand-lg navbar-light bg-light">
  <!--Logo-->
  <div class=" clase logo col-lg-2 col-md-2 col-sm-5 col-xs-4">
    <a href="index.php"><img src="images/LOGO.png" alt=""></a>
  </div>

  <div class="clase col-lg-2 col-md-2 col-sm-5 col-xs-4">
    <!--Menu Hamburguesa-->
    <div class="boton-login">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link fuente" href="index.php">HOME <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link fuente" href="productos.php">PRODUCTOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fuente" href="preguntas_frecuentes.php">CATEGORIAS</a>
          </li>
        </ul>
      </div>
    </div>

    <!--Botones= Buscar Carrito Usuario-->
    <div class="boton-login">


      <!--Usuario Logueado-->
      <?php if(isset($_SESSION['id'])){ ?>
      <!--Boton Buscar-->
      <button type="button" class="icono-banner btn btn-light">
          <img src="images/lupaLog.png" alt="">
      </button>
      <!--Boton Carrito-->
      <button type="button" class="icono-banner btn btn-light">
        <img src="images/carritoLog.png" alt="">
      </button>
      <!--Botones Usuario-->
      <div class="dropdown">
        <!--Boton Desplegable Usuario-->
        <button class="icono-banner btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="images/usuarioLog.png" alt="">
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item fuente" href="#">Mi cuenta</a>
          <br>
          <a class="dropdown-item fuente" href="#">Mis compras</a>
          <br>
          <a class="dropdown-item fuente" href="logout.php">Cerrar Sesion</a>
        </div>
      </div>


      <!--Usuario NO Logueado-->
      <?php } else { ?>
      <!--Boton Buscar-->
      <button type="button" class="icono-banner btn btn-light">
        <img src="images/lupaLog.png" alt="">
      </button>
      <!--Boton Carrito-->
      <button type="button" class="icono-banner btn btn-light">
        <img src="images/carritoLog.png" alt="">
      </button>
      <!--Boton OPCIONES DE USUARIO (iniciar sesion - registrarse)-->
      <div class="dropdown">
        <button class="icono-banner btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="images/usuarioLog.png" alt="">
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <!--Boton INICIAR SESION-->
          <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#loginModal" data-whatever="@getbootstrap">Iniciar sesión</button>
          <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Iniciar sesión</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  <form class="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Correo Electrónico:</label>
                        <input type="email" name='emailLog' class="form-control" id="recipient-name" value="<?=$email?>">
                        <?php if (isset($errores['emailLog'])): ?>
                        <span style='color: red;'>
                          <?=$errores['emailLog'];?>
                        </span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Contraseña:</label>
                        <input type="password" class="form-control" id="recipient-name" name='passLog'>
                        <?php if (isset($errores['passLog'])): ?>
                        <span style='color: red;'>
                          <?=$errores['passLog'];?>
                        </span>
                        <?php endif; ?>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" name='recordarme'>
                        <label class="custom-control-label" for="customCheck1">Recordarme</label>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" name="logBtn" class="btn btn-primary">Iniciar Sesion</button>
                      <button type="button" class="btn btn-primary">¿Olvidó su contraseña?</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <br>
          <!--Boton REGISTRARSE-->
          <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#registroModal" data-whatever="@getbootstrap">Registrarse</button>
          <div class="modal fade show" id="registroModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Registrarse</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <form class="" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="recipient-name" class="col-form-label">Nombre:</label>
                          <input type="text" name='nameReg' class="form-control" id="recipient-name" value="<?=$name?>">
                          <?php if (isset($errores['nameReg'])): ?>
                          <span style='color: red;'>
                            <?=$errores['nameReg'];?>
                          </span>
                          <?php endif; ?>
                      </div>
                      <div class="form-group">
                          <label for="message-text" class="col-form-label">Correo Electrónico:</label>
                          <input type="text" name='emailReg' class="form-control" id="recipient-name" value="<?=$email?>">
                          <?php if (isset($errores['emailReg'])): ?>
                          <span style='color: red;'>
                            <?=$errores['emailReg'];?>
                          </span>
                          <?php endif; ?>
                      </div>
                       <div class="form-group">
                          <label for="message-text" class="col-form-label">Contraseña:</label>
                          <input type="password" name='passReg' class="form-control" id="recipient-name" >
                          <?php if (isset($errores['passReg'])): ?>
                          <span style='color: red;'>
                            <?=$errores['passReg'];?>
                          </span>
                          <?php endif; ?>
                      </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label">Confirmar Contraseña:</label>
                      <input type="password" name='rpassReg' class="form-control" id="recipient-name">
                    </div>
                    <div class="modal-footer">
                      <button type="submit" name='regBtn' class="btn btn-primary">Crear una cuenta nueva</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
        </div>
      </div>
    </div>
  </div>
</nav>
