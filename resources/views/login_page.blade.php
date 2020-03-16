@extends('template')
@extends('layouts.app')

@section('contenu')
<div class="container">
    @yield('contenu')

    <span><h2> Bienvenue {{ Auth::user()->name }}, que souhaitez-vous faire ? </h2></span><br><br>

    <a href="{{ url('/reservation') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Effectuer une réservation</a><br><br>
    <a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Consulter le statut de ma demande</a><br><br>
    <a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Annuler ma réservation</a><br><br>
</div>



@endsection
