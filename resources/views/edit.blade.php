@extends('layouts.master')

@section('title', 'Edit Receipe')

@section('body')
    <h2 class="text-center mt-3">Edit Receipe page</h2>
    <div class="container">
        <form method="post" action="/receipe/{{ $receipe->id }}">
            {{ method_field('patch') }}
            {{ csrf_field() }}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $receipe->name }}" >
            </div>
            <div class="form-group">
                <label for="ingredients">Ingredients</label>
                <input type="text" class="form-control" name="ingredients" value="{{ $receipe->ingredients }}" >
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" class="form-control" name="category" value="{{ $receipe->category }}" >
            </div>
            <button type="submit" class="btn btn-primary">Edit Receipe</button>
        </form>
    </div>
@endsection
