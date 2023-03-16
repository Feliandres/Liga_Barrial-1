@extends('layouts.template')
@section('subtitle', 'Proximos Partidos')
@section('content')


<div style="display: flex; align-items: center; justify-content: center; height: 100vh;">
    <table style="border-collapse: collapse; width: 50%; border: 1px solid #080606;">
        <thead>
            <tr>
                <th>Fecha y hora</th>
                <th>Equipo local</th>
                <th>Equipo visitante</th>
                 {{-- <th>Hora</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($matches as $match)
            <tr>
                <td>{{ $match->date_match->format('d/m/Y H:i') }}</td>
                <td>{{ $match->name_team_local }}</td>
                <td>{{ $match->name_team_visit }}</td>
                {{-- <td>{{ $match->time_match }}</td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div style="display: flex; align-items: center; justify-content: center;">
    <a
        class="mx-auto px-4 py-2 font-bold text-white bg-orange-500 rounded-full hover:bg-orange-600 focus:outline-none focus:shadow-outline"
        type="submit"
        href="{{ route('upcoming.create') }}"
    >
        Agendar Partidos
    </a>
    <button
        class="mx-auto px-4 py-2 font-bold text-white bg-orange-500 rounded-full hover:bg-orange-600 focus:outline-none focus:shadow-outline"
        type="submit"
    >
        Editar Partidos
    </button>
    <button
        class="mx-auto px-4 py-2 font-bold text-white bg-orange-500 rounded-full hover:bg-orange-600 focus:outline-none focus:shadow-outline"
        type="submit"
    >
        Eliminar Partidos
    </button>
    <button
        class="mx-auto px-4 py-2 font-bold text-white bg-orange-500 rounded-full hover:bg-orange-600 focus:outline-none focus:shadow-outline"
        type="submit"
    >
        Cerrar
    </button>
</div>

@endsection
