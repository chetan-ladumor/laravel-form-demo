@extends('layouts.master')

@section('content')

@if(Auth::check())
	<ul>
	    <li>Castlevania</li>
	    <li>Galaga</li>
	    <li>Ghosts n Goblins</li>
	</ul>
@else
	<h2>You are not authorised person</h2>
@endif


@endsection