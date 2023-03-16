@extends('layouts.template')

@section('template_title')
    Calendar
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-around; align-items: center; padding:140px">

                            <span id="card_title">
                                {{ __('Calendario de Próximos Partidos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('calendars.create') }}" class="btn btn-primary btn-sm float-right bg-orange-500 rounded-full hover:bg-orange-600 focus:outline-none"  data-placement="left">
                                  {{ __('Agendar un partido') }}
                                </a>
                              </div>
                        </div>
                    </div>

                    {{-- 
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                     --}}
                    

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        {{-- cabeceras de las tablas --}}
                                        <th>No</th>
                                        
										<th>Fecha del Partido</th>
										<th>Equipo Local</th>
										<th>Equipo Visitante</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($calendars as $calendar)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $calendar->match_calendar }}</td>
											<td>{{ $calendar->local_team_name }}</td>
											<td>{{ $calendar->visit_team_name }}</td>

                                            <td>
                                                {{-- botones de opciones crud --}}
                                                <form action="{{ route('calendars.destroy',$calendar->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('calendars.show',$calendar->id) }}"><i class="fa fa-fw fa-eye"></i> Detalles</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('calendars.edit',$calendar->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $calendars->links() !!}
            </div>
        </div>
    </div>
@endsection