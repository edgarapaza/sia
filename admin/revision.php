<?php

  include "header.php";
  include_once "model/notario.model.php";
  include_once "model/proyectos.model.php";
  include_once "model/revision.model.php";

  $proyectos = new Proyectos();
  $data = $proyectos->ProyectosSinCerrar();

  $revision = new Revision();

?>

<style>
  .btns{

    display: flex;
    align-item: center;
    space
  }
</style>

<div class="container">
  <div class="row">
    <div class="col">
      <h2>
        Listado de Ingresos para revision
      </h2>
    </div>
    <div class="col">
      Seleccionar el Notario a Revisar
      <select name="notario" id="notario">
        <option value="0">[Seleccione]</option>
        <?php
          while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {
            //printf("Cod: %s Notario: %s" , $fila['CodProyecto'], $fila['codNotario']);
            $notarios = new Notarios();
            $name_notario = $notarios->NombreNotario($fila['codNotario']);

            echo "<option value=".$fila['codNotario'].">".$name_notario['notario']."</option>";
          }
        ?>
      </select>
    </div>
  </div>

  <div class="row">
    <div id="respuesta" class="alert alert-success"></div>
    <table class="table">
      <tr>
        <th>Id.</th>
        <th>Materia</th>
        <th>Otorgante</th>
        <th>Favorecido</th>
        <th>Num.Escritura</th>
        <th>Num.Folio</th>
        <th>Fecha</th>
        <th>Bien</th>
        <th>Opciones</th>
      </tr>

      <?php
        $i = 1;
        //Revision del notario LUIS JIMENEZ VARGAS - 55
        $data_rev = $revision->RevisarxNotario(55);
        while ($row_r = $data_rev->fetch_array(MYSQLI_ASSOC)):
      ?>
        <tr>
          <td><?php echo $i;?></td>
          <td><?php echo $row_r['subserie']; ?> </td>
          <td><?php echo $row_r['otorgante']; ?> </td>
          <td><?php echo $row_r['favorecido']; ?> </td>
          <td><?php echo $row_r['escritura']; ?> </td>
          <td><?php echo $row_r['folio']; ?> </td>
          <td><?php echo $row_r['fecha']; ?> </td>
          <td><?php echo $row_r['bien']; ?> </td>
          <td>
            <div class="btns">
              <a href="#" onclick="check(<?php echo $row_r['codIndice']; ?>)" class="btn btn-primary" >Ok</a>
              <a href="change.php?idindice=<?php echo $row_r['codIndice']; ?>" class="btn btn-danger" >M</a>

            </div>


          </td>
        </tr>
        <?php
         $i++;
          endwhile;
        ?>

    </table>
  </div>
</div>

<div class="pop" style="display:none;">
   <h3>¿Estas seguro que los datos son correctos?</h3>
   <div class="botones">
      <button type="button" id="no" class="btn btn-danger">No</button>
      <button type="button" id="si" class="btn btn-success">Si</button>
   </div>
</div>



<script type="text/javascript">



function check(idindice)
{
  //$("#pop").css("display", "block");

  // alert("Dato:" + idindice);

  $.ajax({
    type: "POST",
    url: "./controller/revision.controller.php",
    data: {"idindice": idindice},

    error: function(){
      alert("error al hacer consulta");
    },
    success: function(data){
      $("#respuesta").empty();
      //$("#respuesta").html(data);
      $("#respuesta").html('Registro Verificado y guardado').show(200).delay(2500).hide(200);
      setTimeout(
        function()
        {
          location.reload();
        }, 3000);
        }
  });

}

</script>
<?php
include "footer.php";
?>