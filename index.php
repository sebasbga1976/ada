<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
      <?php
        echo basename( __FILE__ );
      ?>
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
</head>
<body>

  

      <form action="script.php" method="post" accept-charset="utf-8">
      <div class="container">  
      <div class="col-sm-4" >
      <H1>Ingreso al sistema</H1>
              
          <div class="form-group">
            <span><i class="glyphicon glyphicon-user"></i></span>  
            <label>usuario:</label>
            <input id="usuario" type="text" class="form-control" name="usuario" placeholder="usuario" required>
          </div>
          
          <div class="form-group">
            <span><i class="glyphicon glyphicon-lock"></i></span>  
            <label>Contraseña:</label>
            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
          </div>
          
          <div class="form-group form-check">
            <button type="submit" class="btn btn-primary">Submit</button>  
          </div>
        
        </div>
        </div>
      </form>

</body>
</html>