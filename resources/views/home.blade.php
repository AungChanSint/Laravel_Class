@extends('layouts.main')

@section('title', 'Home')

@section('body')
    <h2>Home page</h2>
    @foreach ($receipes as $receipe)
        <li>Name: {{ $receipe->name }}</li>
        <li>Ingredients: {{ $receipe->ingredients }}</li>
        <li>Category: {{ $receipe->category }}</li>
        <hr>
    @endforeach
@endsection