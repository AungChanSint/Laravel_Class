@extends('layouts.master')

@section('title', 'Create Receipe')

@section('body')
    <h2 class="text-center mt-3">Add New Receipe</h2>
    <div class="container">
    <form method="post" action="/receipe">
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
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="ingredients">Ingredients</label>
                <input type="text" class="form-control" name="ingredients" value="{{ old('ingredients') }}">
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" class="form-control" name="category" value="{{ old('category') }}">
            </div>
            <button type="submit" class="btn btn-primary">Add Receipe</button>
        </form>
    </div>
@endsection
