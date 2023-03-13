@extends('layouts.layout')
@section('subtitle', 'Proximos Partidos')
@section('content')

<div style="display: flex; align-items: center; justify-content: center; height: 100vh;">
    <div style="background-color:white; padding-top: 30px; padding-right: 20px; padding-bottom: 30px; padding-left: 40px; border-radius: 10px;">
        <form action="{{ isset($match) ? route('upcoming.create', ['match' => $match->match_id]) : route('upcoming.create') }}" method="POST">
            @csrf
            @if (isset($match))
            @method('PUT')
            @endif
            <label style="color: #3F979B;">Ingrese los datos del partido</label> <br><br><br>
            <label for="name_team_local">Equipo Local:</label> <br>
            <input type="text" id="name_team_local" name="name_team_local" value="{{ isset($match) ? $match->name_team_local : old('name_team_local') }}"> <br>
            <br>
            <label for="name_team_visit">Equipo Visitante:</label> <br>
            <input type="text" id="name_team_visit" name="name_team_visit" value="{{ isset($match) ? $match->name_team_visit : old('name_team_visit') }}"> <br>
            <br>
            <label for="date_match">Fecha:</label> <br>
            <input type="datetime-local" id="date_match" name="date_match" value="{{ isset($match) ? date('Y-m-d\TH:i', strtotime($match->date_match)) : old('date_match') }}"> <br>
            <br>
            <button 
                class="mx-auto px-4 py-2 font-bold text-white bg-orange-500 rounded-full hover:bg-orange-600 focus:outline-none focus:shadow-outline"
                type="submit"
            >
            {{ isset($match) ? 'Actualizar' : 'Crear' }}
            </button> <br>
        </form>
    </div>
</div>
@endsection
