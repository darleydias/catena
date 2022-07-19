@extends('layout')
@section('cabecalho')
Editar Evidências {{$evidencia->evid_descri}}
@endsection
@section('conteudo')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <x-evidencias.form :action="route('evidencias.update')" :evid_descri="$evidencia->evid_descri"/>
@endsection

{{-- php artisan route:cache --}}