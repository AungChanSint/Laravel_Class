@extends('layouts.master')

@section('title', 'Receipe')

@section('body')
    <h2 class="text-center mt-3">Receipe page</h2>
    @foreach ($receipes as $receipe)
        <a href="/receipe/{{ $receipe->id }}">{{ $receipe->name }}</a>
        <hr>
    @endforeach
    <div class="d-flex">
        <a href="/receipe/create"><button class="btn btn-success">Create A Receipe</button></a>
        <button 
            class="btn btn-primary"
            type="submit" 
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            Logout
        </button>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
@endsection