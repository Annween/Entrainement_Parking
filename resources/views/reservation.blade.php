@extends('template')


<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
            @endauth
        </div>
        @endif

@section('contenu')
    {{ csrf_field() }}

            <span style="text-align: center"><h2>Effectuer une réservation</h2><br></span>

            <div class="container">
            @yield('contenu')
                <form action="/reservation" method="post">

                        <div class="form-group">
                            <label for="date1">Du</label>
                            <input type="date" class="form-control" id="date1" >
                        </div>
                        <div class="form-group">
                            <label for="date2">Jusqu'au</label>
                            <input type="date" class="form-control" id="date2" >
                        </div>

                        <div class="form-group">
                            <label for="inputAddress2">Type Véhicule</label>
                            <input type="text" class="form-control" id="TypeV" placeholder="ex: Clio 320">
                        </div>

                    <div class="form-group">
                        <label for="Immat">N° Plaque</label>
                        <input type="text" class="form-control" id="Immat" placeholder="XX-XXX-XX">
                    </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Carte de stationnement handicapé
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Réserver ma place</button>



                </form>

            </div>
@endsection
