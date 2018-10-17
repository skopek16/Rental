@extends('mainUserPanel')

@section('content')
<h3>POTS</h3>
 @if(auth()->user()->admin ==1)
<a class="btn btn-primary" href="pots/create" role="button" style="margin:50px 50px 50px 50px">Create</a>
@endif
@if(count($pots) > 0)
    @foreach($pots as $pot)
        <div class="card" style=" padding: 50px 50px 50px 50px">
            <h3><a href="/pots/{{ $pot->id }}">{{ $pot->name }}</a></h3>
            <small> written on {{ $pot->body }}</small>
        </div>
        @endforeach
        {{ $pots->links()}}
@else
<p>no pots</p>
@endif

@endsection