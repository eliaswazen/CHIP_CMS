<x-admin-master>
    @section('content')

        <h1>Response to Claim</h1>

        <form method="post" action="{{route('claim.update', $claim->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="exampleInput">Problem</label>
                <textarea type="text" name="problem" class="form-control" id="problem" aria-describedby="" placeholder=""
                          >{{$claim->problem}}</textarea>
            </div>

            <div class="form-group">
                <label for="file">System</label>
                <input type="text" name="system" class="form-control" id="system" aria-describedby="" placeholder=""
                       value="{{$claim->system}}">
            </div>

            <div class="form-group">
                <label for="body">Version</label>
                <input type="text" name="version" class="form-control" id="version" aria-describedby="" placeholder=""
                       value="{{$claim->version}}">

            </div> <div class="form-group">
                <label for="body">Comment</label>
                <textarea type="text" name="comment" class="form-control" id="comment" aria-describedby="" placeholder=""
                          >{{$claim->comment}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>



    @endsection


</x-admin-master>
