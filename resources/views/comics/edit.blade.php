@extends('layouts.layoutBase')


@section('page-title','Dc Comics')


@section('main-content')

    <div class="container">
        <div class="row">
            <form method="POST" action="{{route('comics.update',['comic'=>$comic->id])}}">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="thumb" class="form-label">Link Immagine:</label>
                    <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{old('thumb', $comic->thumb)}}">
                    @if ($errors->has('thumb'))
                        @error('thumb')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    @elseif ($errors->any() && old('thumb'))
                        <p class="text-success">Campo inserito correttamente!</p>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo:</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title', $comic->title)}}">
                    @if ($errors->has('title'))
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    @elseif ($errors->any() && old('title'))
                        <p class="text-success">Campo inserito correttamente!</p>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione:</label>
                    <textarea class="form-control" id="description @error('description') is-invalid @enderror" name="description">{{old('description', $comic->description)}}</textarea>
                    @if ($errors->has('description'))
                        @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    @elseif ($errors->any() && old('description'))
                        <p class="text-success">Campo inserito correttamente!</p>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo:</label>
                    <input type="number" step=".01" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price', $comic->price)}}">
                    @if ($errors->has('price'))
                        @error('price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    @elseif ($errors->any() && old('price'))
                        <p class="text-success">Campo inserito correttamente!</p>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Serie:</label>
                    <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{old('series', $comic->series)}}">
                    @if ($errors->has('series'))
                        @error('series')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    @elseif ($errors->any() && old('series'))
                        <p class="text-success">Campo inserito correttamente!</p>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo:</label>
                    <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{old('type', $comic->type)}}">
                    @if ($errors->has('type'))
                        @error('type')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    @elseif ($errors->any() && old('type'))
                        <p class="text-success">Campo inserito correttamente!</p>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data di rilascio:</label>
                    <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{old('sale_date', $comic->sale_date)}}">
                    @if ($errors->has('sale_date'))
                        @error('sale_date')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    @elseif ($errors->any() && old('sale_date'))
                        <p class="text-success">Campo inserito correttamente!</p>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Aggiorna nuovo fumetto</button>

        </form>
    </div>
</div>


@endsection
