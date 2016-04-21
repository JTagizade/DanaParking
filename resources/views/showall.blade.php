@extends ('layout');

@section ('content')

@if(Session::has('deletemsg'))
<span style="color:darkblue">{!! Session::get('deletemsg') !!}</span>
@endif

<table>
	<tr>
	<th>Name</th>
	<th>Surname</th>
	<th>Login</th>
	<th>Email</th>
	<th>Password</th>
	<th>Edit</th>
	<th>Delete</th>
	</tr>


	@foreach ($select as $allelujaallelujaalleluja)

	<tr>
		<td>{{$allelujaallelujaalleluja->name}}</td>
		<td>{{$allelujaallelujaalleluja->surname}}</td>
		<td>{{$allelujaallelujaalleluja->username}}</td>
		<td>{{$allelujaallelujaalleluja->email}}</td>
		<td>{{$allelujaallelujaalleluja->password}}</td>
		<td><button><a href="{{url('edit')}}/{{$allelujaallelujaalleluja->id}}">Edit</a></td>
		<td><button><a href="{{url('delete')}}/{{$allelujaallelujaalleluja->id}}">Delete</a></td>
	</tr>


	@endforeach
	
</table>













@stop