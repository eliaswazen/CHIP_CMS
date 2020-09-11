<x-admin-master>

    @section('content')

        @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message-updated')}}
                @endif



        <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>


        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Checked</th>
                            <th>Id</th>
                            <th>Owner</th>
                            <th>Problem</th>
                            <th>System</th>
                            <th>Version</th>
                            <th>Comment</th>


                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Checked</th>
                            <th>Id</th>
                            <th>Owner</th>
                            <th>Problem</th>
                            <th>System</th>
                            <th>Version</th>
                            <th>Comment</th>

                        </tr>
                        </tfoot>
                        <tbody>

                        @foreach($claims as $claim)
                            <tr>
                                <td><input type="checkbox"

                                           @if($claim->comment != null)
                                           checked
                                        @endif



                                    ></td>
                                <td>{{$claim->id}} </td>
                                <td>{{$claim->user->name}}</td>
                                <td><a href="{{route('claim.edit', $claim->id)}}">{{$claim->problem}}</a></td>
                                <td>{{$claim->system}}</td>
                                <td>{{$claim->version}}</td>
                                <td>{{$claim->comment}}</td>


{{--                                    <form action="{{route('post.destroy', $post->id)}}" method="post" enctype="multipart/form-data">--}}
{{--                                        @csrf--}}
{{--                                        @method('DELETE')--}}
{{--                                        <button class="btn btn-danger" type="submit">Delete</button>--}}
{{--                                    </form>--}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
{{--        <div class="d-flex">--}}
{{--            <div class="mx-auto">--}}
{{--                {{$posts->links()}}--}}
{{--            </div>--}}
{{--        </div>--}}


{{--    @endsection--}}

    @section('scripts')
    <!-- Page level plugins -->
        <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

        <!-- Page level custom scripts -->
                    <script src="{{asset('js/demo/datatables-demo.js')}}"></script>

    @endsection





    @endsection



</x-admin-master>
