@extends('layouts.basics')

@section('content')

@auth
<div class="row">
    <div class="col-md-12">
        <a class="btn btn-sm btn-dark cyan darken-2 float-right" href="/programs/create">Add Program</a>
    </div>
</div>
@endauth

@if ($programs->count() > 0)

    <div class="row">
        <div class="col-md-12">
        @foreach ($programs as $program)
            <div class="card text-center mt-2">
                <div class="card-header white-text cyan darken-2">
                    Akhand Kirtan Devaan - {{ $program->start_date }}
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
        @endforeach
        </div>
    </div>

@endif

@endsection
