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
                <th scope="col">Date</th>
                <th scope="col">Price</th>
                <th scope="col">info</th>
                <th scope="col">Modifica</th>
                <th scope="col">Elimina</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <th scope="row">{{ $comic->id }}</th>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>{{ $comic->sale_date }}</td>
                    <td>{{ $comic->price }}</td>
                    <td><a class="btn btn-secondary" href="{{ route('comics.show', ['comic' => $comic->id]) }}">Info</a>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('comics.edit', ['comic' => $comic->id]) }}">modifica</a>
                    </td>
                    <td>
                        <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"
                                onclick="return confirm('ciao ciccio')">Elimina</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
