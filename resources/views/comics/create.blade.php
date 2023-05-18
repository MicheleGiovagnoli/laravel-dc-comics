@extends('layouts.app')

@section('page-title', 'Crea')

@section('content')
    <main>
        <form method="POST" action="{{ route('comics.store') }}">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" @error('title') is-valid @enderror id="title" name="title"
                    value="{{ old('title') }}">

                {{-- messaggio di errore --}}
                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" placeholder="Leave a description here" id="description"
                    name="description"@error('description') is-valid @enderror>{{ old('description') }}</textarea>
                {{-- messaggio di errore --}}
                @error('description')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">thumb</label>
                <input type="text" class="form-control" id="thumb" name="thumb" @error('thumb') is-valid @enderror
                    value="{{ old('thumb') }}">
                {{-- messaggio di errore --}}
                @error('thumb')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="text" class="form-control" id="price" name="price" @error('price') is-valid @enderror
                    value="{{ old('price') }}">
                {{-- messaggio di errore --}}
                @error('price')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series" @error('series') is-valid @enderror
                    value="{{ old('series') }}">
                {{-- messaggio di errore --}}
                @error('series')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date"
                    @error('sale_date') is-valid @enderror value="{{ old('sale_date') }}">
                {{-- messaggio di errore --}}
                @error('sale_date')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" @error('type') is-valid @enderror
                    value="{{ old('type') }}">
                {{-- messaggio di errore --}}
                @error('type')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Go</button>
        </form>
    </main>
@endsection
