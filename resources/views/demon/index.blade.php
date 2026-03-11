@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Cantidad de sangre</th>
            <th>Jerarquía</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($viewData['demons'] as $demon)
        <tr>
            <td>{{ $demon->getId() }}</td>

            <td>
                {{ $demon->getName() }}
                @if ($demon->getHierarchy() === 'luna')
                    (Concentra tu respiración)
                @endif
            </td>

            <td>
                @if ($demon->getHierarchy() === 'rey')
                    {{ $demon->getBloodAmount() * 2 }}
                @else
                    {{ $demon->getBloodAmount() }}
                @endif
            </td>

            <td>{{ $demon->getHierarchy() }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

<a href="{{ route('demon.home') }}" class="btn btn-secondary">Volver al inicio</a>
@endsection