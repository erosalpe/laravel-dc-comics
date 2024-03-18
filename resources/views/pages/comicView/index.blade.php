@extends('layouts.basic')

@section('title', 'Comics | Index')

@vite('resources/js/app.js')

@section('main')
    <h1>Index Comics</h1>

    <a class="btn btn-primary" href="{{ route('comics.create')}}">
        Crea Comics
    </a>

    <table>
    <thead>
        <tr><th>Actions</th>
            <th>ID</th>
            <th>Title</th>
            <th>description</th>
            <th>thumb</th>
            <th>price</th>
            <th>series</th>
            <th>sale_date</th>
            <th>type</th>
        </tr>
    </thead>
    <tbody>
        @foreach($comics as $item)
            <tr>
                <td>
                    <button class="btn btn-success">
                        Modifica
                    </button>
                    <button class="btn btn-danger">
                        Cancella
                    </button>
                </td>
                <td>{{$item['id']}}</td>
                <td>
                    <a href="{{ route('comics.show', ['comic' => $item ['id'] ] ) }}">
                        {{$item['title']}}
                    </a>
                </td>
                <td>{{$item['description']}}</td>
                <td>{{$item['thumb']}}</td>
                <td>{{$item['price']}}</td>
                <td>{{$item['series']}}</td>
                <td>{{$item['type']}}</td>
            </tr>
         @endforeach
    </tbody>
    </table>
@endsection


