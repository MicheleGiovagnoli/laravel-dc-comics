@extends('layouts.app')

@section('page-title', 'lista')

@section('content')

    <table class="table table-stripped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Series</th>
                <th scope="col">type</th>
                <th scope="col">info</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <th scope="row">{{ $comic->id }}</th>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->type }}</td>
                    <td><a class="btn btn-secondary" href="{{ route('comics.show', ['comic' => $comic->id]) }}">Info</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
