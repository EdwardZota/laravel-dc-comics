@extends('layouts.layoutBase')


@section('page-title','Dc Comics:Cestino')


@section('main-content')

    <h1 class="text-center text-white ">Cestino DC Comics</h1>

    <div class="container">
        <div class="row d-flex justify-content-around">
            @foreach ($trashs as $trash)
                <div class="card mb-5 p-0" style="width: 18rem;">
                    @if (isset($trash->thumb))
                        <img src="{{$trash->thumb}}" class="card-img-top" alt="{{$trash->title}}">
                    @else
                        <img src="{{Vite::asset('resources/image/image_not_available.png')}}" alt="not available">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{$trash->title}}</h5>
                        <p class="card-text">Serie:{{$trash->series}}</p>
                        <div class="d-flex ">
                            <a href="{{route('comics.show',['comic' => $trash->id])}}" class="btn btn-success">Dettagli</a>
                            <a href="{{route('comics.edit',['comic' => $trash->id])}}" class="btn btn-warning mx-2">Modifica</a>
                            
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>


@endsection
