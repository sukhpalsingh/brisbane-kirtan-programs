@extends('layouts.basics')

@section('content')

@if ($program === null)

<div class="row mt-3">
    <div class="col-md-12">
        <p class="alert alert-info">No incoming Akhand Keertan Deewan.</p>
    </div>
</div>

@else

<div class="row mt-3">
    <div class="col-md-12">
        <h1>Incoming Deewan</h1>
    </div>
</div>

<div class="card text-center mt-2">
    <div class="card-header white-text cyan darken-2">
        Akhand Kirtan Dewaan - {{ $program->start_date }}
    </div>
    <div class="card-body">
        <p class="card-title h3">
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
</div>

@endif

@endsection
