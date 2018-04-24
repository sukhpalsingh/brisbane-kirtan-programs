@extends('layouts.basics')

@section('content')


<!-- Card -->
<div class="card mx-xl-5 mt-4">

    <!-- Card body -->
    <div class="card-body">

        <!-- Extended material form grid -->
        <form id="program_details_form" name="program_details_form" method="POST"
            action="/programs"
        >
            {{ csrf_field() }}
            <div class="form-row">
                <div class="col-md-3">
                    <div class="md-form form-group">
                        <input type="text" id="start_date" name="start_date" class="form-control datepicker">
                        <label for="start_date">Date</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="md-form form-group">
                        <input type="text" class="form-control timepicker" id="start_time" name="start_time">
                        <label for="start_time">From</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="md-form form-group">
                        <input type="text" class="form-control timepicker" id="end_time" name="end_time">
                        <label for="end_time">To</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="person_name" name="person_name">
                        <label for="person_name">Name</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="house_no" name="house_no">
                        <label for="house_no">Unit No. and/or H.No.</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="street" name="street">
                        <label for="street">Street</label>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="suburb" name="suburb">
                        <label for="suburb">Suburb</label>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-3">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="postcode" name="postcode">
                        <label for="postcode">Postcode</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="state" name="state">
                        <label for="state">State</label>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-md">Save</button>
        </form>
    </div>
</div>

@endsection

@section('scripts')
<script type="text/javascript">
    $('.datepicker').datetimepicker({
        format: 'd/m/Y',
        timepicker:false
    });
    $('.timepicker').datetimepicker({
        datepicker:false,
        format:'H:i'
    });
</script>
@endsection