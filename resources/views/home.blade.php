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

                    <table class="table"> 
                        <tr>
                            <th>Project Name</th>
                            <th>Detail</th>
                            <th>Status</th>
                        </tr>
                        
                        @foreach($data as $item=>$value)
                            <tr>
                                <td>{{$value->project_name}}</td>
                                <td>{{$value->detail}}</td>
                                <td>{{$value->status}}</td> 
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
