<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand" href="index.php">BANMEX</a></div>

    <div class="collapse navbar-collapse" id="defaultNavbar1">
      <ul class="nav navbar-nav">
        <?php
          if(!empty($_SESSION['logged']))
          {
            $level = '';
            switch ($_SESSION['level']) {
              case '1':
                $level = 'Administrador';
                echo ' <li><a href="accion.php">Admin Panel</a></li>';
                break;
              case '2':
                $level = "Empleado";
                break;
              case '3':
                $level = "Cliente";
                break;
              default:
                $level = 'Cliente';
                break;
            }
            echo "<li>Bienvenido $level</li>";            
          }

        ?>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Ayuda</a></li>

        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sesión<span class="caret"></span></a>
          <ul class="dropdown-menu">

          <?php

          if(!empty($_SESSION['logged']))
          {
              echo 
              '
                <li><a href="index.php?page=logout">Salir</a></li>

              ';
          }
          else
          {
            echo 
            '
              <li><a href="index.php?page=login">Entrar</a></li>
            ';
          }
          ?>
          </ul>
        </li>
      </ul>

    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>