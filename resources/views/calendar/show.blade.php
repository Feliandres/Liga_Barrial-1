@extends('layouts.layout')

@section('template_title')
    {{ $calendar->name ?? 'Show Calendar' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalles generales del partido registrado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('calendars.index') }}"> Regresar a la tabla de partidos</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha y hora del Partido:</strong>
                            {{ $calendar->match_calendar }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre del equipo local:</strong>
                            {{ $calendar->local_team_name }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre del equipo visitante:</strong>
                            {{ $calendar->visit_team_name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection