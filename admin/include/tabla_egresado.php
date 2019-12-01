<div class="col-md-12 col-sm-12  ">
   <a href="reporte/reporte.php"><button type="button" class="btn btn-dark">Reporte</button></a>
  <div class="x_panel">
      <div class="x_title">
        <h2>Datos generales</h2>
        <div class="clearfix"></div>
      </div>

    <div class="x_content">
      <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action">
          <thead>
            <tr class="headings">
              <th class="column-title">DNI</th>
              <th class="column-title">Nombres</th>
              <th class="column-title">Apellidos</th>
              <th class="column-title">Fecha Nacimiento</th>
              <th class="column-title">Nacionalidad</th>
              <th class="column-title">Telefono </th>
              <th class="column-title">Genero </th>
              <th class="column-title">Acta grado</th>
              <th class="column-title">Carrera</th>
              <th class="column-title">Mencion</th>
              <th class="column-title">Modadlidad</th>
              <th class="column-title">Nivel formacion</th>
              <th class="column-title">Fecha ingreso</th>
              <th class="column-title">Fecha egreso</th>
              <th class="column-title">Fecha graduacion</th>
              <th class="column-title">Ocupacion actual</th>
              <th class="column-title">Empresa</th>


            </tr>
          </thead>
        <tbody>
           <?php  include_once './consultas/consulta_encuesta.php'; ?>
        </tbody>
        </table>
      </div>
    </div>
  </div>
</div>