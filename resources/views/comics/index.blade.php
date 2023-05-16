@extends('layouts.layoutBase')


@section('page-title','Dc Comics')


@section('main-content')
    <div class="text-center mb-4 text-white ">
        <h1>lista fumetti</h1>
        <a href="{{route('comics.create')}}" class="btn btn-primary">Aggiungi fumetto</a>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-around">
            @foreach ($comics as $comic)
                <div class="card mb-4 p-0" style="width: 18rem;">
                    @if (isset($comic->thumb))
                        <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
                    @else
                        <img src="{{Vite::asset('resources/image/image_not_available.png')}}" alt="not available">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{$comic->title}}</h5>
                        <p class="card-text">Serie:{{$comic->series}}</p>
                        <a href="{{route('comics.show',['comic' => $comic->id])}}" class="btn btn-primary">Maggiori dettagli</a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>


@endsection
