@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')

<div class="text-center">
    <a href="{{ route('demon.create') }}" class="btn btn-primary m-2">
        Registrar demonios
    </a>
    <a href="{{ route('demon.index') }}" class="btn btn-secondary m-2">
        Listar demonios
    </a>
    <a href="{{ route('demon.stats') }}" class="btn btn-info m-2">
        Estadísticas de demonios
    </a>
</div>
@endsection