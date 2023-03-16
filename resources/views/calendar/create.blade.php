@extends('layouts.layout')
@section('template_title')
    Create Calendar
@endsection

@section('content')

    <section class="content container-fluid">
        <div style="display: flex; align-items: center; justify-content: center; height: 100vh;">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Agendar un Nuevo Partido</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('calendars.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('calendar.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    
@endsection

