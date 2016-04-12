@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Now Posts Yet!
                </div>
                <div class="form-group">
                    {!! Form::label('New Post') !!}
                    {!! Form::text('post', null, 
                        array('required', 
                              'class'=>'form-control', 
                              'placeholder'=>'Write something......')) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Send', 
                      array('class'=>'btn btn-primary')) !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection