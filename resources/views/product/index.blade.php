<!-- resources/views/product/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des produits</h1>

    <ul>
        @foreach ($products as $product)
            <li>
                <a href="{{ route('products.show', $product->slug) }}">
                    {{ $product->name }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
