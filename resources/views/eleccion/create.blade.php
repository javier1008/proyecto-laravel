@extends('plantilla')
@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="card uper">
    <div class="card-header">
        Agregar Eleccion
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        <form method="post" action="{{ route('eleccion.store') }} " 
        enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="ubicacion">Periodo:</label>
                <input type="text" id="ubicacion"
                 class="form-control" name="ubicacion" />
            </div>
            <div class="form-group">
                <label for="ubicacion">Fecha:</label>
                <input type="date" id="ubicacion"
                 class="form-control" name="ubicacion" />
            </div>
            <div class="form-group">
                <label for="ubicacion">Fecha Apertura:</label>
                <input type="date" id="ubicacion"
                 class="form-control" name="ubicacion" />
            </div>
            <div class="form-group">
                <label for="ubicacion">Hora de Apertura:</label>
                <input type="time" id="ubicacion"
                 class="form-control" name="ubicacion" />
            </div>
            <div class="form-group">
                <label for="ubicacion">Fecha de cierre:</label>
                <input type="date" id="ubicacion"
                 class="form-control" name="ubicacion" />
            </div>
            <div class="form-group">
                <label for="ubicacion">Hora de cierre:</label>
                <input type="time" id="ubicacion"
                 class="form-control" name="ubicacion" />
            </div>
            <div class="form-group">
                <label for="ubicacion">Observaciones:</label>
                <input type="Text" id="ubicacion"
                 class="form-control" name="ubicacion" />
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
@endsection