@extends('layouts.main')

@section('comics')
<div class="container">
    <div class="label">CURRENT SERIES</div>
    <div class="row border">
        @foreach ($comics as $comic)        
        <div class="col border">
            <a href="{{route('comics.show', $comic)}}">
                <div class="card border">
                    <figure>
                        <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                    </figure>
                    <figcaption>{{$comic->title}}</figcaption>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    <a class="btn btn-primary" href="{{route('comics.create')}}">Aggiungi Comic</a>
</div>
@endsection