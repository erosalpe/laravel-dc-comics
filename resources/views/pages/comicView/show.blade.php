@extends('layouts.basic')

@section('title', 'Comic | Show')

@section('main')
    <h2>Singolo Comic</h2>
    <a href="../comics" class="btn btn-warning">Indietro</a>
    <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">{{$comic->title}}</li>
            <li class="list-group-item">{{$comic->description}}</li>
            <li class="list-group-item">{{$comic->thumb}}</li>
            <li class="list-group-item">{{$comic->price}}</li>
            <li class="list-group-item">{{$comic->series}}</li>
            <li class="list-group-item">{{$comic->sale_date}}</li>
            <li class="list-group-item">{{$comic->type}}</li>
        </ul>
    </div>
@endsection