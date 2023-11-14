<!-- resources/views/category/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des catégories</h1>

    <ul>
        @foreach ($categories as $category)
            <li>
                <a href="{{ route('categories.show', $category->slug) }}">
                    {{ $category->name }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
