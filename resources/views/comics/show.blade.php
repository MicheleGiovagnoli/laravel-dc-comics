@extends('layouts.app')

@section('page-title', 'Mostra info')

@section('content')
    <main>
        <div class="card" style="width: 18rem;">
            <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <p class="card-text">{{ $comic->description }}</p>
                <h5 class="card-title">{{ $comic->price }}</h5>
                <h5 class="card-title">{{ $comic->sale_date }}</h5>
                <h5 class="card-title">{{ $comic->type }}</h5>
                <a href="{{ route('comics.index') }}" class="btn btn-secondary">Come Back</a>
                <a href="#" class="btn btn-secondary">↑</a>
            </div>
        </div>
    </main>
@endsection
