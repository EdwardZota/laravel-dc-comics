@extends('layouts.layoutBase')


@section('page-title','Dc Comics')


@section('main-content')

    @if (session('status-negative'))
        <div class="alert alert-warning">
            {{ session('status-negative') }}
        </div>
    @endif

    <div class="text-center mb-4 text-white ">
        <h1>lista fumetti</h1>
        <a href="{{route('comics.create')}}" class="btn btn-primary">Aggiungi fumetto</a>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-around">
            @foreach ($comics as $comic)
                <div class="card mb-5 p-0" style="width: 18rem;">
                    @if (isset($comic->thumb))
                        <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
                    @else
                        <img src="{{Vite::asset('resources/image/image_not_available.png')}}" alt="not available">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{$comic->title}}</h5>
                        <p class="card-text">Serie:{{$comic->series}}</p>
                        <div class="d-flex ">
                            <a href="{{route('comics.show',['comic' => $comic->id])}}" class="btn btn-success">Dettagli</a>
                            <a href="{{route('comics.edit',['comic' => $comic->id])}}" class="btn btn-warning mx-2">Modifica</a>

                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$comic->id}}">
                                Elimina
                              </button>
                            @include('partials.modal')
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>


@endsection
