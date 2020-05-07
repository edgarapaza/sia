<?php
include("header.php");
?>

<div class="container">
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
</div>

<?php
include("footer.php");
?>