@extends('layouts.app')

@section('content')

    <div class="container">
    <h1>Response</h1>
@foreach($claims as $claim)

            <div class="row justify-content-center">
                <div class="col-md-8">

                    <div class="form-group">
                        <h3>Problem</h3>
                    <h5 style="margin-left: 30px"> {{$claim->problem}} </h5>
                    </div>

                    <div class="form-group">
                        <h3>System</h3>
                        <h5 style="margin-left: 30px"> {{$claim->system}} </h5>
                    </div>

                    <div class="form-group">
                        <h3>Version</h3>
                        <h5 style="margin-left: 30px"> {{$claim->version}} </h5>
                    </div>

                    <div class="form-group">
                        <h3>Solution</h3>
                        <h5 style="margin-left: 30px"> {{$claim->comment}} </h5>
                    </div>


                </div>
            </div>

        @endforeach
    </div>

@endsection
