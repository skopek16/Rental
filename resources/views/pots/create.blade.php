@extends('mainUserPanel')

@section('content')
<h3>POTS create</h3>
<form method="post" action="{{url('/books')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
        <div class="form-group">
        <label for="author">Image:</label>
        <input type="file" class="form-control=-file border" name="potImage"/>
    </div>
</form>
{!! Form::open(['action' => 'PostController@store', 'method' => 'POTS']) !!}
    <div class="form-group">
        {{ Form::label('name','Name') }}
        {{ Form::text('name','',['class' => 'form-control','placeholder'=> 'Name']) }}

    </div>
    <div class="form-group">
        {{ Form::label('body','Body') }}
        {{ Form::textarea('body','',['class' => 'form-control','placeholder'=> 'BodyText']) }}

    </div>
    {{ Form::submit('Submit',['class'=>'btn btn-primary']) }}
{!! Form::close() !!}
@endsection