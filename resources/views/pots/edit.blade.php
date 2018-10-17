@extends('mainUserPanel')

@section('content')
<h3>POTS edit</h3>

{!! Form::open(['action' => ['PostController@update',$pots->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{ Form::label('name','Name') }}
        {{ Form::text('name',$pots->name,['class' => 'form-control','placeholder'=> 'Name']) }}

    </div>
    <div class="form-group">
        {{ Form::label('body','Body') }}
        {{ Form::textarea('body',$pots->body,['class' => 'form-control','placeholder'=> 'BodyText']) }}

    </div>
    {{ Form::hidden('_method','PUT' ) }}
    {{ Form::submit('Submit',['class'=>'btn btn-primary']) }}
{!! Form::close() !!}
@endsection