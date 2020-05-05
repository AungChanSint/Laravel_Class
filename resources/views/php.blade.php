@extends('layouts.main')

@section('title', 'PHP')

@section('body')
    <ul>
        <li><a href="/php">PHP</a></li>
        <li><a href="/js">JS</a></li>
    </ul>
    <h1>PHP Page</h1>

    @foreach ($lessons as $lesson)
    <li>{{ $lesson }}</li>
    @endforeach
@endsection