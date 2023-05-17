@extends('layouts.app')

@section('page-title', 'Mostra info')

@section('content')
    <main>
        <main>
            {{-- Sulla action metto la rotta sulla update e gli passo l'id --}}
            <form method="POST" action="{{ route('comics.update', ['comic' => $comic->id]) }}">
                {{-- csrf metodo di protezione --}}
                @csrf
                {{-- Il form accetta come parametri solo POST o GET , quindi creiamo questo metodo speciale per cambiare il metodo --}}
                {{-- (comunque laravel legge il form in modalita post) --}}
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" placeholder="Leave a description here" id="description" name="description">{{ $comic->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">thumb</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">price</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date"
                        value="{{ $comic->sale_date }}">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
                </div>
                <button type="submit" class="btn btn-primary">Go</button>
            </form>
        </main>
    </main>
@endsection
