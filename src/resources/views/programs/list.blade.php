@extends('layouts.basics')

@section('content')

<div class="row">
    <div class="col-md-12">
        <a class="btn btn-primary float-right" href="/programs/create">Add Program</a>
    </div>
</div>

@if ($programs->count() > 0)

    @foreach ($programs as $program)
        <div class="card card-body text-center">
            <h4 class="card-title">
                Akhand Kirtan Devaan - {{ $program->start_date }}
            </h4>
            <p class="card-text h4">
                {{ $program->person_name }}
            </p>
            <p class="card-text">
                {{ $program->start_date }}
            </p>
            <p class="card-text">
                {{ $program->start_time }} - {{ $program->end_time }}
            </p>

            <p class="card-text">
                {{ $program->house_no }} {{ $program->street }}
            </p>
            <p class="card-text">
                {{ $program->suburb }}, {{ $program->postcode }}, {{ $program->state }}
            </p>
        </div>
    @endforeach

@endif

@endsection
