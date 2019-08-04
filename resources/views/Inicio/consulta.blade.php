@extends('Shared.Layouts')
@section('title', 'Mantenimiento estudiante')
@section('content')
    <div class="container p-t-60">
		@if ($Mensaje = Session::get('Mensajes'))
			<div class="alert alert-success" role="alert">
				<strong>{{ $Mensaje}}</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		@endif
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Mantenimiento de <b>Estudiantes</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Nuevo estudiantes</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Eliminar</span></a>						
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
                        <th>Matricula</th>
                        <th>Nombre</th>
						<th>Apellido</th>
                        <th>Edad</th>
                    </tr>
                </thead>
                <tbody>	
					@foreach ($Estudiantes as $Estudiante)
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="Select" name="options[]" value="1">
								<label for="Select"></label>
							</span>
						<td >{{ $Estudiante->Matricula }}</td>
						<td>{{ $Estudiante->Nombre }}</td>
						<td>{{ $Estudiante->Apellido }}</td>
						<td>{{ $Estudiante->Edad }}</td>
						<td>
							<a href="/Update/{{ $Estudiante->Matricula }}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip"
							title="Editar">&#xE254;</i></a>
							<a href="/Estudiantes/{{ $Estudiante->Matricula }}" class="delete" ><i class="material-icons" data-toggle="tooltip"
							title="Eliminar">&#xE872;</i></a>
						</td>
						</td>
					</tr>
					@endforeach		
                </tbody>
            </table>
        </div>
    </div>
	<!-- ADD STUDENTS-->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" action="/Estudiantes">
					@csrf
					@method('POST')
					<div class="modal-header">						
						<h4 class="modal-title">Agregar estudiante</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Matricula</label>
							<input type="text" class="form-control" name="Matricula" required>
						</div>
						<div class="form-group">
							<label>Nombre</label>
							<input type="text" class="form-control" name="Nombre" required>
						</div>
						<div class="form-group">
							<label>Apellido</label>
							<input type="text" class="form-control" name="Apellido" required>
						</div>
						<div class="form-group">
							<label>Edad</label>
							<input type="number" class="form-control" name="Edad" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" value="Agregar">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- DELETE STUDENTS -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="Delete">
					<div class="modal-header">						
						<h4 class="modal-title">Borrar estudiantes</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>¿Seguro que desea eliminar el estudiante?</p>
						<p class="text-warning"><small>No podra recuperarlo una vez borrado.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-danger" value="Eliminar">
					</div>
				</form>
			</div>
		</div>
	</div>
	@endsection
    