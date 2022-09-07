@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{url('admin/'.$model->project_name)}}">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH">
                        Project Name : <input type="text" name = "project_name" value = {{$model->project_name}}><br/>
                        Detail : <input type="text" name = "detail" value = {{$model->detail}}><br/>
                        Status : <input type="text" name = "status" value = {{$model->status}}><br/>
                        
                        <button type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


