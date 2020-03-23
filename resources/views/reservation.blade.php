@extends('template')
@extends('layouts.app')



@section('contenu')
    {{ csrf_field() }}

            <span style="text-align: center"><h2>Effectuer une réservation</h2><br></span>

            <div class="container">
            @yield('contenu')
                <form action="{{ route('reservation.store') }}" method="POST">
                    @csrf

                        <div class="form-group">
                            <label for="date1">Du</label>
                            <input type="date" class="form-control" id="date1" value="{{ old('date_debut') }} >
                        </div>
                        <div class="form-group">
                            <label for="date2">Jusqu'au</label>
                            <input type="date" class="form-control" id="date2" value="{{ old('date_fin') }}">
                        </div>

                        <div class="form-group">
                            <label for="inputAddress2">Type Véhicule</label>
                            <input type="text" class="form-control" id="TypeV" placeholder="ex: Clio 320" value="{{ old('type_vehicule') }}">
                        </div>

                    <div class="form-group">
                        <label for="Immat">N° Plaque</label>
                        <input type="text" class="form-control" id="Immat" placeholder="XX-XXX-XX" value="{{ old('num_immat') }}">
                    </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck" value="{{ old('PMR') }}">
                                <label class="form-check-label" for="gridCheck">
                                    Carte de stationnement handicapé
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Réserver ma place</button>



                </form>

            </div>
@endsection
