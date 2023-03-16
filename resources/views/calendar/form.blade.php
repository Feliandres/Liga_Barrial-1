<div style="display: flex; align-items: center; justify-content: center; height: 100vh; background-color: white; border-radius: 10px; padding: 20px ">
    <div class="box box-info padding-1">
        <div class="box-body">
            
            <div class="form-group">

                {{-- {{ Form::label('Ingrese_la_fecha_del_partido') }}
                {{ Form::datetimeLocal('match_calendar', $calendar->match_calendar, ['class' => 'form-control' . ($errors->has('match_calendar') ? ' is-invalid' : ''), 'placeholder' => 'Match Calendar']) }}
                {!! $errors->first('match_calendar', '<div class="invalid-feedback">:message</div>') !!} 
                --}}
                <label for="match_calendar">Ingrese la fecha del partido:</label>
                <input type="datetime-local" id="match_calendar" name="match_calendar" class="form-control{{ $errors->has('match_calendar') ? ' is-invalid' : '' }}" placeholder="Match Calendar" value="{{ $calendar->match_calendar }}">
                {!! $errors->first('match_calendar', '<div class="invalid-feedback">:message</div>') !!}

            </div><br>
                
            </div><br>
            <div class="form-group">

                {{-- {{ Form::label('Ingresa el nombre del equipo local') }}
                {{ Form::text('local_team_name', $calendar->local_team_name, ['class' => 'form-control' . ($errors->has('local_team_name') ? ' is-invalid' : ''), 'placeholder' => 'Local Team Name']) }}
                {!! $errors->first('local_team_name', '<div class="invalid-feedback">:message</div>') !!} 
                --}}
                <label for="local_team_name">Ingresa el nombre del equipo local:</label>
                <input type="text" id="local_team_name" name="local_team_name" class="form-control{{ $errors->has('local_team_name') ? ' is-invalid' : '' }}" placeholder="Local Team Name" value="{{ $calendar->local_team_name }}">
                {!! $errors->first('local_team_name', '<div class="invalid-feedback">:message</div>') !!}
                
            </div><br>
            <div class="form-group">

                {{-- {{ Form::label('Ingresa el nombre del equipo visitante') }}
                {{ Form::text('visit_team_name', $calendar->visit_team_name, ['class' => 'form-control' . ($errors->has('visit_team_name') ? ' is-invalid' : ''), 'placeholder' => 'Visit Team Name']) }}
                {!! $errors->first('visit_team_name', '<div class="invalid-feedback">:message</div>') !!}
                --}}
                <label for="visit_team_name">Ingresa el nombre del equipo visitante:</label>
                <input type="text" id="visit_team_name" name="visit_team_name" class="form-control{{ $errors->has('visit_team_name') ? ' is-invalid' : '' }}" placeholder="Visit Team Name" value="{{ $calendar->visit_team_name }}">
                {!! $errors->first('visit_team_name', '<div class="invalid-feedback">:message</div>') !!}
                
            </div>
        </div>
    
        <div class="box-footer mt20">
            <br><button type="submit" class="btn btn-primary bg-orange-500 rounded-full hover:bg-orange-600 focus:outline-none">Registar partido</button>
        </div>
    </div>
    
</div>