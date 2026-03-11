@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('demon.store') }}">
    @csrf

    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Cantidad de sangre</label>
        <input type="number" name="blood_amount" class="form-control" value="{{ old('blood_amount') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Jerarquía</label>
        <select name="hierarchy" class="form-select">
            <option value="">Seleccione...</option>
            <option value="rey" {{ old('hierarchy') === 'rey' ? 'selected' : '' }}>Rey</option>
            <option value="luna" {{ old('hierarchy') === 'luna' ? 'selected' : '' }}>Luna</option>
            <option value="común" {{ old('hierarchy') === 'común' ? 'selected' : '' }}>Común</option>
        </select>
    </div>

    <button type="submit" class="btn btn-success">Registrar</button>
</form>
@endsection