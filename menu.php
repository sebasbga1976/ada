<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Ada</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="principal.php">Home</a></li>
      <li><a href="cuentas.php">Cuentas</a></li>
      <li><a href="registros">Registros</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php echo(" ".$_SESSION['usuario']); ?></a></li>
      <li><a href="salir.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>