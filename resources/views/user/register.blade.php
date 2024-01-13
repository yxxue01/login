
@extends('layouts.master')

@section('title', $title)

@section('sidebar')
    @parent
    // you can add something here
@endsection

@section('content')

	<h1>{{ $title }}</h1>

	<form action="{{ route('user.store') }}" method="POST">
		@csrf
	<table>
		<tr>
			<td><label>Name : </label></td>
			<td><input type="text" placeholder="name" name="name" required></td>
		</tr>
		<tr>
			<td><label>Username : </label></td>
			<td><input type="text" placeholder="username" name="username" required></td>
		</tr>
		<tr>
			<td><label>Password : </label> </td>
			<td><input type="password" placeholder="*******" name="password" required></td>
		</tr>	
		<tr>
			<td></td>
			<td><button type="submit" class=" hover:bg-sky-700 hover:text-white">Login</button> </td>
		</tr>
	</table>		
	
	</form>

@endsection