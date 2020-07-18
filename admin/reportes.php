<?php
require_once "header.php";

?>
<style>
  body{
    background-color: #193549;
    color: white;
  }
</style>

<div class="container">
  <div class="row">
    <h1>Reportes</h1>
  </div>

  <div class="row">
    <div class="col-3">
      <p>Opciones de busqueda</p>
      <form action="">
        <label for="año">Seleccione Año</label>
        <select name="year" id="year" class="form-control">
          <option value="2020">2020</option>
        </select>

        <label for="mes">Seleccione mes</label>
        <select name="mes" id="mes" class="form-control">
          <option value="01">Enero</option>
          <option value="02">Febrero</option>
          <option value="03">Marzo</option>
          <option value="04">Abril</option>
          <option value="05">Mayo</option>
          <option value="06">Junio</option>
          <option value="07">Julio</option>
          <option value="08">Agosto</option>
          <option value="09">Septiembre</option>
          <option value="10">Octubre</option>
          <option value="11">Noviembre</option>
          <option value="12">Diciembre</option>
        </select>

        <label for="año">Trabajador:</label>
        <select name="personal" id="personal" class="form-control">
          <option value="0">[--Seleccione--]</option>
          <option value="all">Todos</option>
          <option value="11">Edgar Apaza Choque</option>
        </select>
        <br>
        <button class="btn btn-primary">Buscar por Mes</button>

        <p>Por Rango de Fechas</p>
        Del: <input type="date">
        <br>
        Al  : <input type="date">
        <br>
        <button class="btn btn-primary">Buscar por Fechas</button>

      </form>
    </div>
    <div class="col-9">
      <h3>Reporte por cada trabajador</h3>
      <p>Cantidad reportada:  323 ingresos</p>

      <table class="table">
        <tr>
          <th>Num</th>
          <th>Cod. Indice</th>
          <th>Escritura</th>
          <th>Proyecto</th>
          <th>Fecha Ingreso</th>
          <th>Corregido?</th>
          <th>Revisado?</th>
        </tr>

        <tr>
          <td>ksks</td>
        </tr>
      </table>
    </div>
  </div>
</div>
