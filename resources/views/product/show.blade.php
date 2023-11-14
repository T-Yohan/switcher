<!-- resources/views/product/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p>Prix : {{ $product->price }}</p>
    <!-- Ajoutez d'autres détails du produit ici -->
</div>
@endsection
