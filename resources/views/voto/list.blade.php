@extends('plantilla')
@section('content')

<div class="uper">
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    <br />
    @endif
<table class="table table-striped">
    <thead>
        <tr>
            <td>voto</td>
            <td>casilla</td>
            <td>Candidatos y votos</td>
            <td colspan="2">ACTION</td>
        </tr>
    </thead>
    <tbody>
        @foreach($votos as $voto)
        <tr>
            <td>{{$voto->id}}</td>
            <td>{{$voto->casilla->ubicacion}}</td>
            <td>
                <table>
                @foreach($voto->candidatos as $candidato)
                    <tr>
                        <td>{{$candidato->nombrecompleto}} </td>
                        <td><input type="text" readonly 
                        value="{{$candidato->pivot->votos}}"
                        name="candidato_{{$candidato->id}}"  > </td>
                    </tr>
                @endforeach
                </table>
            </td>
            <td></td>
            
        </tr>
        @endforeach
    </tbody>
    
</table>
<div>
@endsection