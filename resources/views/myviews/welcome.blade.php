@extends('layouts.main_layout')
@section('content')

@include('common.errors')

	<h1 style="text-align: center;">Basic Task List</h1>
	<table align="center" border="1">
		<tr>
			<td style="text-align: center;">Add Task</td>
			<form action="{{ url('/task') }}" method="POST">
				{{ csrf_field() }}
				<td><input type="text" name="name" style="width: 200px; height: 50px"></td>
				<td>
					<input type="submit" name="sbmt" value="Add" style="height: 60px;width:55px">
				</td>				
			</form>
		</tr>

		@if(count($tasks) > 0)
			@foreach($tasks as $task)
				<tr>
					<td>{{ $task->id }}</td>
					<td>{{ $task->name}}</td>
					<td>
						<form action="{{url('/task/'.$task->id)}}" method="POST">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
							<input type="submit" name="dlt" value="Delete">					
						</form>							
					</td>
				</tr>
			@endforeach
		@endif
	
	</table>

@endsection