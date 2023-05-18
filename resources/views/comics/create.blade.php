@extends('layouts.app')

@section('page-title', 'Crea')

@section('content')
    <main class="p-5 bg-success">
        <form class="p-5 bg-secondary" method="POST" action="{{ route('comics.store') }}">
            @csrf

            {{-- Title --}}
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" @error('title') is-valid @enderror id="title" name="title"
                    value="{{ old('title') }}">

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
                <textarea class="form-control" placeholder="Leave a description here" id="description"
                    name="description"@error('description') is-valid @enderror>{{ old('description') }}</textarea>
                {{-- messaggio di errore --}}
                @error('description')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- Description --}}

            {{-- Thumb --}}
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" id="thumb" name="thumb" @error('thumb') is-valid @enderror
                    value="{{ old('thumb') }}">
                {{-- messaggio di errore --}}
                @error('thumb')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- Thumb --}}

            {{-- Price --}}
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price" @error('price') is-valid @enderror
                    value="{{ old('price') }}">
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
                <input type="text" class="form-control" id="series" name="series" @error('series') is-valid @enderror
                    value="{{ old('series') }}">
                {{-- messaggio di errore --}}
                @error('series')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- Series --}}

            {{-- Sale Date --}}
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
            {{-- Sale Date --}}

            {{-- Type --}}
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
            {{-- Type --}}

            {{-- Button --}}
            <button type="submit" class="btn btn-primary">Go</button>
            {{-- Button --}}
        </form>
    </main>
@endsection
