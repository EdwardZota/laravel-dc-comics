
@extends('layouts.layoutBase')


@section('page-title')

    Dc:Comics {{$comic->title}}

@endsection


@section('main-content')

    @if (session('status-positive'))
        <div class="alert alert-success">
            {{ session('status-positive') }}
        </div>
    @endif

    <div class="container text-white my-5">
        <div class="row w-50">
            @if (isset($comic->thumb))
            <div>
                <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
            </div>
            @else
                <img src="{{Vite::asset('resources/image/image_not_available.png')}}" alt="not available">
            @endif
            <h2>{{$comic->title}}</h2>
            <p>Tipo: {{$comic->type}}</p>
            <p>Serie: {{$comic->series}}</p>
            <p>Data di rilascio: {{$comic->sale_date}}</p>
            <p>Prezzo: {{$comic->price}}</p>
            <p>Descrizione: <br />{{$comic->description}}</p>
        </div>
        <a href="{{route('comics.index')}}" class="btn btn-primary">Torna all'elenco completo</a>

    </div>


@endsection
