@extends('layouts.app')

@section('page-title', 'Mostra info')

@section('content')
    <main class="p-5 bg-success">
        {{-- Sulla action metto la rotta sulla update e gli passo l'id --}}
        <form class="p-5 bg-secondary" method="POST" action="{{ route('comics.update', ['comic' => $comic->id]) }}">
            {{-- csrf metodo di protezione --}}
            @csrf
            {{-- Il form accetta come parametri solo POST o GET , quindi creiamo questo metodo speciale per cambiare il metodo --}}
            {{-- (comunque laravel legge il form in modalita post) --}}
            @method('PUT')

            {{-- Title --}}
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" @error('title') is-valid @enderror id="title" name="title"
                    value="{{ old('title', $comic->title) }}">
                {{-- messaggio di errore --}}
                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- Title --}}

            {{-- Description --}}
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" placeholder="Leave a description here" @error('description') is-valid @enderror
                    id="description" name="description">{{ old('description', $comic->description) }}</textarea>
                {{-- messaggio di errore --}}
                @error('description')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- Description --}}

            {{-- URL --}}
            <div class="mb-3">
                <label for="thumb" class="form-label">thumb</label>
                <input type="text" class="form-control" @error('thumb') is-valid @enderror id="thumb" name="thumb"
                    value="{{ old('thumb', $comic->thumb) }}">
                {{-- messaggio di errore --}}
                @error('thumb')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- URL --}}

            {{-- Price --}}
            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="text" class="form-control" @error('price') is-valid @enderror id="price" name="price"
                    value="{{ old('price', $comic->price) }}">
                {{-- messaggio di errore --}}
                @error('price')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- Price --}}

            {{-- Series --}}
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" @error('series') is-valid @enderror id="series" name="series"
                    value="{{ old('series', $comic->series) }}">
                {{-- messaggio di errore --}}
                @error('series')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- Series --}}

            {{-- Sale_Date --}}
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="date" class="form-control" @error('sale_date') is-valid @enderror id="sale_date"
                    name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
                {{-- messaggio di errore --}}
                @error('sale_date')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- Sale_Date --}}

            {{-- Type --}}
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" @error('type') is-valid @enderror id="type" name="type"
                    value="{{ old('type', $comic->type) }}">
                {{-- messaggio di errore --}}
                @error('type')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- Type --}}

            {{-- Button --}}
            <button type="submit" class="btn btn-primary">Go</button>
            {{-- Button --}}
        </form>
    </main>
@endsection
