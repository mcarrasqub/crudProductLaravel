@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')

<div class="card">
    <div class="card-body">
        <p><strong>ID:</strong> {{ $viewData['product']->getId() }}</p>
        <p><strong>Name:</strong> {{ $viewData['product']->getName() }}</p>
        <p><strong>Price:</strong> {{ $viewData['product']->getPrice() }}</p>
        <p><strong>Specie:</strong> {{ $viewData['product']->getSpecie() }}</p>
        <p><strong>Description:</strong> {{ $viewData['product']->getDescription() }}</p>
        <p><strong>Stock:</strong> {{ $viewData['product']->getStock() }}</p>

        <a href="{{ route('product.index') }}" class="btn btn-secondary mt-3">
            Back to list
        </a>

          <form action="{{ route('product.destroy', $viewData['product']->getId()) }}"
              method="POST" class="d-inline"
              onsubmit="return confirm('Are you sure?');">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger mt-3">Delete</button>
        </form>
    </div>
</div>
@endsection

 