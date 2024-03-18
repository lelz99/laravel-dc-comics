@extends('layouts.main')
@section('section-id', 'single-comic')
@section('comics')

<figure class="mb-0 banner">
   <img class="img-fluid thumb" src="{{$comic->thumb}}" alt="{{$comic->title}}">
</figure>
<div class="container">
   <div class="row py-3">
      <div class="col-8">
         <div class="card mb-3 border-0"">
            <div class="card-body">
              <h5 class="card-title">{{$comic->title}}</h5>
              <div class="alert mb-0 d-flex justify-content-between align-items-center">
               <p class="mb-0"><span>U.S Price:</span> {{$comic->price}}</p>
               <div class="d-flex align-items-center">
                  <p class="mb-0">AVAILABLE</p>
                  <div class="line"></div>
                  <p class="mb-0 text-white">Check Availability</p>
               </div>
              </div>
              <p class="card-text">{{$comic->description}}</p>
            </div>
          </div>
      </div>
      <div class="col-4">
         <div class="text-end">
            <p class="mb-0 fw-bold">ADVERTISEMENT</p>
            <img class="img-fluid" src="{{Vite::asset('resources/img/adv.jpg')}}" alt="">
         </div>
      </div>
   </div>
</div>
@endsection








@section('comic-info')
<section id="comic-info">
   <div class="container">

      <div class="row">
         <div class="col">
            <h3>Talent</h3>
            <div class="artists-writers">
               <h5>Art By</h5>
               <p>{{$comic->artists}}</p>
            </div>
            <div class="artists-writers">
               <h5>Written By</h5>
               <p>{{$comic->writers}}</p>
            </div>
         </div>
         <div class="col">
            <h3>Specs</h3>
            <div class="artists-writers">
               <h5>Series</h5>
               <p>{{$comic->series}}</p>
            </div>
            <div class="artists-writers">
               <h5>U.S. Price</h5>
               <p>{{$comic->price}}</p>
            </div>
            <div class="artists-writers">
               <h5>On Sale Date</h5>
               <p>{{$comic->sale_date}}</p>
            </div>
         </div>
      </div>
      <div class="d-flex gap-2">
         <a class="btn btn-warning" href="{{route('comics.edit', $comic->id)}}">Modifica</a>
         <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Elimina</button>
         </form>
      </div>
   </div>
</section>
@endsection