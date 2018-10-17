@extends('mainUserPanel')

@section('content')
<a href="/pots" class="btn btn-primary" role="button" style="margin:50px 50px 50px 50px">Go Back</a>
<h1>{{ $pots->name }}</h1>
<hr>
<div class="card" style=" padding: 50px 50px 50px 50px">
    {{ $pots->body }}
</div>
<hr>
 @if(auth()->user()->admin ==1)
<a href="/pots/{{ $pots->id }}/edit" class="btn btn-primary" role="button" style="margin:50px 50px 50px 50px">Edit</a>

{!! Form::open(['action'=>['PostController@destroy',$pots->id],'method' => 'POST', 'class'=>'float-right','style'=>'margin:50px 50px 50px 50px']) !!}
    {{ Form::hidden('_method','DELETE') }}
    {{ Form::submit('Delete',['class'=> 'btn btn-danger']) }}
    

{!! Form::close() !!}
@endif
@endsection

