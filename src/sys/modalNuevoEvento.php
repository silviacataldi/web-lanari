<?php $hoy= date('Y-m-d');?>1
<div class="modal" id="exampleModal"  tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Registrar Nuevo Evento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  <form name="formEvento" id="formEvento" action="nuevoEvento.php" class="form-horizontal" method="POST">
		<div class="form-group">
      <label for="nombre" class="col-sm-12 control-laber">Nombre</label>
      <div class="col-sm-10">
        <select name="nombre" id="nombre" class="form-control">
          <option deseable selected>Elija su nombre</option>
          <option value="Silvia">Silvia</option>
          <option value="Oscar">Oscar</option>
          <option value="Lucas">Lucas</option>
          <option value="Alejandro">Alejandro</option>
          <option value="Federico">Federico</option>
        </select>
      </div>
			<label for="evento" class="col-sm-12 control-label">Evento</label>
			<div class="col-sm-10">
        <select class="form-control" name="evento" id="evento" required>
          <option disabled selected>Elija un motivo</option>
          <option value="Ausente" style="background-color: #FF5722; color: #fff;">Ausente</option>
          <option value="Vacaciones" style="background-color: #8BC34A; color: #fff;">Vacaciones</option>
          <option value="1/2 jornada" style="background-color: #FFC107; color: #fff;">1/2 Jornada</option>
          <option value="especial" style="background-color: #2196F3; color: #fff;">Especial</option>
          <option value="medico" style="background-color: #9c27b0; color: #fff;">Médico</option>
        </select>
     
			</div>
		</div>
    <div class="form-group">
      <label for="fecha_inicio" class="col-sm-12 control-label">Fecha Inicio</label>
      <div class="col-sm-10">
      <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" placeholder="Fecha Inicio"" min="2024-01-01" max="2040-12-31" />
        
      </div>
    </div>
    <div class="form-group">
      <label for="fecha_fin" class="col-sm-12 control-label">Fecha Final</label>
      <div class="col-sm-10">
      <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" placeholder="Fecha Final"" min="2024-01-01" max="2040-12-31" />
        
      </div>
    </div>
		
	   <div class="modal-footer">
      	<button type="submit" class="btn btn-success">Guardar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
    	</div>
	</form>
      
    </div>
  </div>
</div>