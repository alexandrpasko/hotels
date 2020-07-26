@extends('layouts.admin')	


@section('content')

	<div class="card my-3">
		<div class="card-header">
			<h1 class="card-title">{{ $title }}</h1>
		</div> 

		<div class="card-body">
			<form class="form" action="/admin" method="post" enctype="multipart/form-data">

				@method('PUT')

				<div class="form-group">
					<label for="name">Hotel Name</label>
					<input type="text" class="form-control" name="name" id="name" value="{{ old('name', $hotel->name) }}" />

					@error('name')
						<span class="alert-danger">{{ $message }}</span>
					@enderror
				</div> 

				<div class="form-group">
					<label for="stars">Stars (1-5)</label>
					<input type="number" class="form-control" name="stars" id="stars" value="{{ old('stars', $hotel->stars) }}" />
					@error('stars')
						<span class="alert-danger">{{ $message }}</span>
					@enderror
				</div>

				<div class="form-group">
					<label for="restaurants">Number of Restaurants</label>
					<input type="number" class="form-control" name="restaurants" id="restaurants" value="{{ old('restaurants', $hotel->restaurants) }}" />
					@error('restaurants')
						<span class="alert-danger">{{ $message }}</span>
					@enderror
				</div>

				<div class="form-group">
					<label for="bars">Number of Bars</label>
					<input type="number" class="form-control" name="bars" id="bars" value="{{ old('bars', $hotel->bars) }}" />
					@error('bars')
						<span class="alert-danger">{{ $message }}</span>
					@enderror
				</div>												

				<div class="form-group">
					<label for="pools">Number of Pools</label>
					<input type="number" class="form-control" name="pools" id="pools" value="{{ old('pools', $hotel->pools) }}" />
					@error('pools')
						<span class="alert-danger">{{ $message }}</span>
					@enderror
				</div>	

				<div class="form-group">
					<label for="abstract">Brief Description</label>
					<textarea name="abstract" id="abstract" rows="3" class="form-control" placeholder="Short paragraph ...">{{ old('abstract', $hotel->abstract) }}</textarea>
					@error('abstract')
						<span class="alert-danger">{{ $message }}</span>
					@enderror
				</div>

				<div class="form-group">
					<label for="body">Full Description (HTML preffered)</label>
					<textarea name="body" id="body" rows="5" class="form-control" placeholder="<p>Description</p><ul>List:<li>List Items</li></ul>">{{ old('body', $hotel->body) }}</textarea>
					@error('body')
						<span class="alert-danger">{{ $message }}</span>
					@enderror
				</div>

				<div class="form-group">
					<label for="category_id">Category</label>
					<select class="form-control" name="category_id" id="category_id">
						<option value="">Select a category</option>
						@foreach($categories as $cat)
						<option 
						@if($cat->id == old('category_id', $hotel->category_id)) 
							selected 
						@endif 
						 value="{{ $cat->id }}">
							{{ $cat->name }}
						</option>
						@endforeach
					</select>
					@error('category_id')
						<span class="alert-danger">{{ $message }}</span>
					@enderror					
				</div>

				<div class="form-group">
					<label for="raiting">Raiting</label>
					<select class="form-control" name="raiting" id="raiting">
						<option value="">Select a category</option>
						<option  
						@if(old('raiting', $hotel->raiting) == 'poor') 
							 selected  
						@endif 
						 value="poor">
							poor
						</option>
						<option 
						@if(old('raiting', $hotel->raiting) == 'good') 
							selected 
						@endif 
						 value="good">
							good
						</option>
						<option 
						@if(old('raiting', $hotel->raiting) == 'very good') 
							selected 
						@endif 
						 value="very good">
							very good
						</option>
						<option 
						@if(old('raiting', $hotel->raiting) == 'excellent') 
							selected 
						@endif 
						 value="excellent">
							excellent
						</option>

					</select>
					@error('raiting')
						<span class="alert-danger">{{ $message }}</span>
					@enderror					
				</div>				

				<div class="form-group">
					<label for="all_inclusive">All Inclusive:</label><br>
					<input 
						@if(old('all_inclusive', $hotel->all_inclusive) == true) 
							checked 
						@endif 
						type="radio" name="all_inclusive" value="yes" checked="" />&nbsp;
					Yes &nbsp;&nbsp;
					<input 
						@if(old('all_inclusive', $hotel->all_inclusive) == false) 
							checked 
						@endif 
					 type="radio" name="all_inclusive" value="no" />&nbsp;
					No
					@error('all_inclusive')
						<span class="alert-danger">{{ $message }}</span>
					@enderror					
				</div> 

				<div class="form-group">
					<label for="price">Price (person/week)</label>
					<input type="number" class="form-control" name="price" id="price" value="{{ old('price', $hotel->price) }}" />
					@error('price')
						<span class="alert-danger">{{ $message }}</span>
					@enderror
				</div>				

				<div class="form-group">
					<label for="image">Hotel Image</label>
					<input type="file" class="" name="image" id="image" value="{{ old('image', $hotel->image) }}" />
					@error('image')
						<span class="alert-danger">{{ $message }}</span>
					@enderror
				</div>				

				@csrf

				<input type="hidden" name="id" value="{{ old('id', $hotel->id) }}">

				<div class="form-group">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>

			</form>
		</div>

		<div class="card-footer">
			<p class="text-center">Be professional, be nise</p>
		</div>
	</div>

@stop