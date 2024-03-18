@extends('layouts.main')
@section('comics')    
<div class="container">
    <form action="{{route('comics.store')}}" method="POST" class="bg-white p-3 rounded">
        @csrf
        <div class="row">
            {{-- Titolo --}}
            <div class="col-4">
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="obb" value="{{old('title', '')}}">
                </div>
            </div>
            {{-- Serie --}}
            <div class="col-4">
                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series" placeholder="obb" value="{{old('series', '')}}">
                </div>
            </div>
            {{-- Tipo --}}
            <div class="col-4">
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <input type="text" class="form-control" id="type" name="type" placeholder="obb" value="{{old('type', '')}}">
                </div>
            </div>
            {{-- Prezzo --}}
            <div class="col-4">
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{old('price', '')}}">
                </div>
            </div>
            {{-- Data Vendita --}}
            <div class="col-4">
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data Vendita</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{old('sale_date', '')}}">
                </div>
            </div>
            {{-- Immagine --}}
            <div class="col-4">
                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" placeholder="obb" value="{{old('thumb', '')}}">
                </div>
            </div>
            {{-- Descrizione --}}
            <div class="col-12">
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" name="description">{{old('description', '')}}</textarea>
                </div>
            </div>
            {{-- Artisti --}}
            <div class="col-6">
                <div class="mb-3">
                    <label for="artists" class="form-label">Artisti</label>
                    <textarea class="form-control" id="artists" name="artists" placeholder="obb">{{old('artists', '')}}</textarea >
                </div>
            </div>
            {{-- Scrittori --}}
            <div class="col-6">
                <div class="mb-3">
                    <label for="writers" class="form-label">Scrittori</label>
                    <textarea class="form-control" id="writers" name="writers" placeholder="obb">{{old('writers', '')}}</textarea>
                </div>
            </div>
        </div>
        <div class="text-end">
            <button type="reset" class="btn btn-secondary">Cancella</button>
            <button type="submit" class="btn btn-success">Salva</button>
        </div>
    </form>
</div>
@endsection