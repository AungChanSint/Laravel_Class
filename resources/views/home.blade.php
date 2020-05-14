@extends('layouts.master')

@section('title', 'Receipe')

@section('body')
    <h2 class="text-center mt-3">Receipe page</h2>
    @foreach ($receipes as $receipe)
        <li>Name: <a href="/receipe/{{ $receipe->id }}">{{ $receipe->name }}</a></li>
        <li>Ingredients: {{ $receipe->ingredients }}</li>
        <li>Category: {{ $receipe->category }}</li>
        <hr>
    @endforeach
    <a href="/receipe/create"><button class="btn btn-primary">Create A Receipe</button></a>
@endsection