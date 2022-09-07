{{-- @extends('layouts.app') --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a class="btn btn-info" href="{{ url('admin/create') }}">Create</a>
                    <br/>
                        <table class="table"> 
                            <tr>
                                <th>Project Name</th>
                                <th>Detail</th>
                                <th>Status</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                            @foreach($data as $item=>$value)
                                <tr>
                                    <td>{{$value->project_name}}</td>
                                    <td>{{$value->detail}}</td>
                                    <td>{{$value->status}}</td>
                                    <td><a class ="btn btn-info" href="{{url('admin/'.$value->project_name.'/edit')}}">Update</a></td>
                                    <td>
                                        <form action="{{ url('admin/'.$value->project_name) }}" method="POST">
                                            @csrf 
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>    
                                </tr>
                            @endforeach
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
