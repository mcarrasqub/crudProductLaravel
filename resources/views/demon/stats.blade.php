@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')

<h4>Cantidad de demonios por jerarquía</h4>
<ul>
    <li>Rey: {{ $viewData['counts']['rey'] }}</li>
    <li>Luna: {{ $viewData['counts']['luna'] }}</li>
    <li>Común: {{ $viewData['counts']['común'] }}</li>
</ul>

<h4>Sangre más alta registrada</h4>
<p>
    @if ($viewData['maxBlood'] !== null)
        {{ $viewData['maxBlood'] }}
    @else
        No hay demonios registrados.
    @endif
</p>

<a href="{{ route('demon.home') }}" class="btn btn-secondary">Volver al inicio</a>
@endsection