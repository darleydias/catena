@extends('layout')
@section('cabecalho')
Adiciona Evidências
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
    <x-evidencias.form :action="route('evidencias.store')"/>
@endsection

{{-- php artisan route:cache --}}