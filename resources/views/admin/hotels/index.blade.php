@extends('layouts.admin')	


@section('content') 

	<div class="card my-4">
		<div class="card-header">
			<h1 class="card-title">{{ $title }}</h1>
		</div>

		<div class="card-body"> 

			<a href="/admin/hotels/create" type="submit" class="btn btn-success mb-3">Add new Hotel</a>

			<!-- output hotels in a table -->
			<table class="table table-striped text-center">
				<tr class="heading_row">
					<th>Hotel ID</th>
					<th>Title</th>
					<th>Country</th>
					<th>Visual</th>
					<th>Actions</th>
				</tr>

			@foreach($hotels as $hotel)
				
				<tr>
					<td class="align-middle">{{ $hotel->id }}</td>
					<td class="align-middle">{{ $hotel->name }}</td>
					<td class="align-middle">{{ $hotel->category->name }}</td>
					<td class="align-middle"><img src="images/{{ $hotel->image }}" alt="{{ $hotel->name }}" style="max-width: 200px;"></td>
					<td class="align-middle">
						<form class="delete" action="/admin/hotels" method="post" onsubmit="return confirm('Do you really want to delete this record?')" > 
							@csrf 
							@method('DELETE') 
							<input type="hidden" name="id" value="{{ $hotel->id }}" />
							<button type="submit" class="btn btn-danger">delete</button>
						</form>
						<a class="btn btn-primary mt-1" href="/admin/hotels/{{ $hotel->id }}/edit">edit</a>
					</tr>

			@endforeach
			</table>
			
		</div>

		<div class="card-footer">
			<p class="text-center">Be professional, be nise</p>
		</div>
	</div>

@stop