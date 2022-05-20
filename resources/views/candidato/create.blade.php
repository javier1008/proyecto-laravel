@extends('plantilla')
@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="card uper">
    <div class="card-header">
        Agregar Candidato
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
        <form method="post" action="{{ route('candidato.store') }} " 
        enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="nombrecompleto">Nombre completo:</label>
                <input type="text" id="nombrecompleto"
                 class="form-control" name="nombrecompleto" />
            </div>
            <div class="form-group">
                <label for="sexo">Sexo:</label>
                <select name="sexo">
                    <option value="H">Hombre</option>
                    <option value="M">Mujer</option>
                </select>
            </div>
            <div class="form-group">
                <label for="foto">Foto:</label>
                <input type="file" id="foto" accept="image/png, image/jpeg" 
                 class="form-control" name="foto" /> <br>
                 <img style="visibility:hidden"  id="prview" src=""  width=100 height=100 />
            </div>
            <script>
            foto.onchange = evt => {
            const [file] = foto.files
            if (file) {
            prview.style.visibility = 'visible';
            prview.src = URL.createObjectURL(file)
                    }
            }
            </script>
            <div class="form-group">
                <label for="perfil">Perfil:</label>
                <input type="file" id="perfil" accept="application/pdf"
                 class="form-control" name="perfil" />
                 
            </div>
            <div class="form-group" id="img-perfil">
                <iframe src="" frameborder="0" id="vista-pdf"></iframe>
            
            </div>
            
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
@endsection