@extends('Index.authentification')

@section('content')
<div class="container" style="background: #282727;">
	<table border = "1">
		<tr>
		<td>Id</td>
		<td>First Name</td>
		<td>Last Name</td>
		<td>City Name</td>
		<td>Email</td>
		</tr>
		@foreach ($users as $user)
		<tr>
		<td>{{ $user->id }}</td>
		<td>{{ $user->firstname }}</td>
		<td>{{ $user->lastname }}</td>
		<td>{{ $user->username }}</td>
		<td>{{ $user->email }}</td>
		</tr>
		@endforeach
	</table>
</div>
@endsection