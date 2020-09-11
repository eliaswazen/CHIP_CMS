@extends('layouts.app')

@section('content')
    @if(Session::has('create-message'))
        <div class="alert alert-success">
            {{Session::get('create-message')}}
        </div>
        @endif



<div class="container">
    <h1>Claims</h1>
    <h4><a href="{{route('claim.response')}}">Response</a> </h4>
    <div class="row justify-content-center">
        <div class="col-md-8">

             <form method="post" action="{{route('claim.store')}}" enctype="multipart/form-data">
                         @csrf

                         <div class="form-group">
                             <label for="exampleInput">Problem</label>
                             <textarea type="text" name="problem" class="form-control" id="problem" aria-describedby="" placeholder="" required>
{{--                                 {{$claim->problem}}--}}
                             </textarea>
                         </div>

                         <div class="form-group">
                             <label for="system">System</label>
                             <input type="text" name="system" class="form-control" id="system" placeholder="" required>
                         </div>

                         <div class="form-group">
                             <label for="version">Version</label>
                             <input type="text" name="version" class="form-control" id="version" placeholder="" required>
                         </div>

                         <button type="submit" class="btn btn-primary">Submit</button>
                     </form>

            </div>

        </div>
    </div>
</div>
{{--    @foreach($claims as $claim)--}}
{{--        <div class="form-group">--}}
{{--            <label for="version">Comment</label>--}}
{{--            <div class="display-comment">--}}
{{--                {{$claim->comment}}--}}
{{--            </div>--}}
{{--    @endforeach--}}
@endsection
