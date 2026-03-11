@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')

@if (session('status'))
    <div style="background:#f0fdf4;border:1px solid #bbf7d0;color:#166534;
                padding:10px;border-radius:6px;margin-bottom:15px;">
        {{ session('status') }}
    </div>
@endif

<div class="text-center">
    <a href="{{ route('product.create') }}" class="btn btn-primary m-2">
        Go to creation
    </a>
    <a href="{{ route('product.index') }}" class="btn btn-secondary m-2">
        Go to list
    </a>
</div>
@endsection