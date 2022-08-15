@extends('frontend.owner.layouts.omaster')
@section('contain')
    <title>Resume View</title>
    <br>
    <div class="container p-3 my-3 border">
        <div class="panel  panel-primary">
            <div class="panel-heading ">
                <h1 class="text-light bg-success font-weigt-bold">Resume View</h1>
            </div>

            <div class="panel-body">
                @if(Session::has('Success'))
                    <div class=" alert alert-success">
                        {{Session::get('Success')}}
                    </div>
                @endif
                <div class="col-md-9">
                    <table class="table">
                        <thead>
                        <th>User name</th>
                        <th>Resume</th>
                        </thead>
                        <tbody>
                        <tr>
                            @foreach ($circular->resumes as $resume)
                                <td>{{$resume->User->name}}</td>
                                <td><iframe src="{{asset('uploads/images/'.$resume->photo)}}" height="100" width="100"></iframe></td>
                                <td>
                                    <a class="btn btn-info" href="{{route('r.view',$resume->id)}}">Rusume view</a>
                                </td>
                        </tr >
                        </tbody>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    </body>
    </html>
@endsection
