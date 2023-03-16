@extends('layouts.layout')
@section('template_title')
    Update Calendar
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar o actualizar partido de fútbol</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('calendars.update', $calendar->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('calendar.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection