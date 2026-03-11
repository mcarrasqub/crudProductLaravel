@extends('layouts.app') 
@section('title', $viewData["title"]) 
@section('subtitle', $viewData["subtitle"]) 
@section('content') 

<div class="row"> 
  @foreach ($viewData["products"] as $product) 
    <div class="col-md-4 col-lg-3 mb-2"> 
      <div class="card"> 
        <img src="https://laravel.com/img/logotype.min.svg" class="card-img-top img-card"> 
        <div class="card-body text-center"> 
          <h5 class="card-title">{{ $product->getName() }}</h5>
          <p class="card-text">ID: {{ $product->getId() }}</p>
          <a href="{{ route('product.show', ['id' => $product->getId()]) }}" 
             class="btn bg-primary text-white">
             View
          </a> 
        </div> 
      </div> 
    </div> 
  @endforeach
  
  <a href="{{ route('product.home') }}" class="btn btn-secondary mt-3">
        Back to home
    </a>
</div> 
@endsection