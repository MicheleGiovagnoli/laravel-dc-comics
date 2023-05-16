@extends('layouts.app')

@section('page-title', 'Mostra')

@section('content')
    <main>
        <div class="card" style="width: 18rem;">
            <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <a href="#" class="btn btn-primary">Go info</a>
            </div>
        </div>
    </main>
@endsection
