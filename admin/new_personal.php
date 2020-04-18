<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Administrador</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
</head>
<body>
  <div class="container">
    
    <div class="row">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="new_personal.php">Nuevo personal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Salir</a>
        </li>
        
      </ul>
    </div>

    <div class="row">
      

        <form method="post"  action="controller/newpersonal.controller.php">
          <div class="form-group">
            <label for="exampleFormControlInput1">Nombre:</label>
            <input type="text" class="form-control" name="nombre" placeholder="Nombre">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">parteno:</label>
            <input type="text" class="form-control" name="paterno" placeholder="paterno">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Materno:</label>
            <input type="text" class="form-control" name="materno" placeholder="Materno">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">DNI:</label>
            <input type="text" class="form-control" name="dni" placeholder="DNI">
          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Tipo</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option value="2" selected="selected">2 - Personal</option>
              <option value="1">1 - Administrador</option>
            </select>
          </div>
          
          <div class="form-group">
            <button type="submit">Guardar</button>
          </div>
        </form>
      </div>
    
    </div>


  
</body>
</html>


