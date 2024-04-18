<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">    
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<h1 align="center">Sistema Ada</h1>
<div class="container">
 <?php
 include_once "menu.php";
 echo($_SESSION['usuario']);
 ?>   
<div class="col-sm-4">
    <div class="panel panel-success">
      <div class="panel-heading">Cuentas</div>
      <div class="panel-body"><p>Gestión cuentas</p></div>
      <div class="panel-footer"><button type="button" class="btn btn-success">Success</button></div>
    </div>
</div>
    
<div class="col-sm-4">
    <div class="panel panel-success">
      <div class="panel-heading">Registros</div>
      <div class="panel-body"><p>Módulo para el registro de operaciones</p></div>
      <div class="panel-footer"><button type="button" class="btn btn-success">Success</button></div>
      
    </div>
</div>
    
</div>
</body>
</html>