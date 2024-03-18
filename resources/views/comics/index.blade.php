@extends('layouts.main')
@section('section-id', 'comics')

@section('comics')
<div class="container">
    <div class="label">CURRENT SERIES</div>
    <div class="row">
        @foreach ($comics as $comic)        
        <div class="col-2">
            <a href="{{route('comics.show', $comic->id)}}">
                <div class="card bg-transparent  h-100 border-0">
                    <img src="{{$comic->thumb}}" class="card-img-top h-100 rounded-0" alt="{{$comic->title}}">
                    <div class="card-title mt-2">
                        <h4 class="text-white h6">{{$comic->title}}</h4>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
        <div class="col-12 text-center mt-2">
            <a class="btn btn-outline-primary text-white border-2 fw-bold" href="{{route('comics.create')}}">Aggiungi Comic</a>
        </div>
    </div>
</div>
@endsection