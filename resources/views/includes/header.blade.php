<nav class="container py-3 d-flex justify-content-between align-items-center">
    <a href="{{route('home')}}"><img class="img-fluid" src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="Logo Dc Comic"></a>
    <div>
        <ul>
            <li><a href="#">characters</a></li>
            <li><a href="{{route('comics.index')}}">comics</a></li>
            <li><a href="#">movies</a></li>
            <li><a href="#">tv</a></li>
            <li><a href="#">games</a></li>
            <li><a href="#">collectibles</a></li>
            <li><a href="#">videos</a></li>
            <li><a href="#">fans</a></li>
            <li><a href="#">news</a></li>
            <li><a href="#">shop</a></li>
            </ul>
    </div>
        {{-- aggiungere stile --}}
    <form>
        <input type="search" name="" id="">
    </form>
</nav>