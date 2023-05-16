
@extends('layouts.layoutBase')


@section('page-title')

    Dc:Comics {{$comic->title}}

@endsection


@section('main-content')

    <div class="container">
        <div class="row w-50">
            @if (file_exists($comic->thumb))
                <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
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
