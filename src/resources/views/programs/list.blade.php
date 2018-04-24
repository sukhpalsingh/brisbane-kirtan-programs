@extends('layouts.basics')

@section('content')

<div class="row">
    <div class="col-md-12">
        <a class="btn btn-primary float-right" href="/programs/create">Add Program</a>
    </div>
</div>

@if ($programs->count() > 0)

    @foreach ($programs as $program)
        <div class="card card-body">
            <h4 class="card-title">
                Kirtan Samagam - {{ $program->start_date }}
            </h4>
            <p class="card-text">
                {{ $program->person_name }}
            </p>
            <p class="card-text">
                Date: {{ $program->start_date }}
            </p>
            <p class="card-text">
                Time: {{ $program->start_time }} - {{ $program->end_time }}
            </p>

            <p class="card-text">
                Address: {{ $program->house_no }}, {{ $program->street }}
            </p>
            <p class="card-text ml-5">
                {{ $program->suburb }}, {{ $program->postcode }}, {{ $program->state }}
            </p>
        </div>
    @endforeach

@endif

@endsection
