@extends('Base')

@section('Title', 'Login')

@section('Content')
	<h1>Hello From, Login</h1>
	@foreach ($User as $User)
		<li>{{ $User->id }}</li>
		<li>{{ $User->username }}</li>
		<li>{{ $User->password }}</li>
		@endforeach
@endsection