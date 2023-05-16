@extends('layouts.app')

@section('page-title', 'Crea')

@section('content')
    <main>
        <form method="POST" action="{{ route('comics.store') }}">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" placeholder="Leave a description here" id="description" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="date" class="form-control" id="type" name="type">
            </div>
            <button type="submit" class="btn btn-primary">Go</button>
        </form>
    </main>
@endsection
