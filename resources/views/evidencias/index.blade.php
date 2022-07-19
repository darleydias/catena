@extends('layout')

@section('cabecalho')
Evidências
@endsection
@section('conteudo')
@if(!@empty($msg))
        <div class="alert alert-success">
        {{$msg}}
        </div>
@endif
<a href="{{route('evidencias.create')}}" class="btn btn-dark mb-2">Adicionar</a>
    <ul class="list-group">
    @foreach($evidencias as $evidencia)
        <li class='list-group-item  d-flex justify-content-between align-items-center'>{{$evidencia->evid_descri}}
        <span class="d-flex">
            <a href="{{route('evidencias.edit',$evidencia->evid_id)}}" class="btn btn-danger btn-sm" style="margin-right: 10px">Ed</a>
            <form method="POST" onSubmit="return confirm('tem certeza que deseja resolver {{addslashes($evidencia->evid_descri)}}')" action="/evidencias/{{$evidencia->evid_id}}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
            </form>
        </span>
        
        </li>
    @endforeach
    </ul>
@endsection