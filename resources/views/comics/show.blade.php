@extends('layouts.main')

@section('comics')
<section id="single-comic" class="container">
    <img class="thumb" src="{{$comic->thumb}}" alt="">
    <div class="row">
       <div class="col-70">
          <div class="card">
             <div class="card-header">
                <h2>{{$comic->title}}</h2>
                <div class="alert">
                   <p><span>U.S Price:</span> {{$comic->price}}</p>
                   <div>
                      <p><span>AVAILABLE</span></p>
                      <p>Check Availability</p>
                   </div>
                </div>
             </div>
             <div class="card-body">
                <p>{{$comic->description}}</p>
             </div>
          </div>
       </div>
       <div class="col-30">
          <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="">
       </div>
    </div>
 </section>
 
 <section id="comic-info">
    <div class="row container">
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
 </section>
@endsection