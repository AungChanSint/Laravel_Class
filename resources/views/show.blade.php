@extends('layouts.master')

@section('body')
{{-- @can('view', $receipe)
    
@endcan --}}
    <h2 class="text-center mt-3">{{ $receipe->name }}</h2>
    <li>Name: {{ $receipe->name }}</li>
    <li>Ingredients: {{ $receipe->ingredients }}</li>
    <li>Category: {{ $receipe->categories->name }}</li>
    <br>
    <div class="d-flex">
        <a href="/receipe/{{ $receipe->id }}/edit"><button class="btn btn-primary mr-2">Edit</button></a>

        <form method="post" action="/receipe/{{ $receipe->id }}">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection
