@extends('layouts/layout')


@section('content')

<div class="nav_bg"></div>

<div class="container_gray">

	<div class="card text-center container_width margin_auto">

	  <div class="card-header black_bg text-white-50">
	    <h1 class="responsive_heading" style="line-height: normal">{{ $hotel->name }} 
	    	<span class="responsive_span_new_line">
			@for ($i = 0; $i < $hotel->stars; $i++)
			    <i class="fas fa-star gold h4 align-middle"></i>
			@endfor
			</span>
	    </h1>
	  </div>

	  <div class="card-body p-0 pr-2">

	  	<div class="p-0">
	  		<img class="float-right ml-2 mobile_width" src="/images/{{ $hotel->image }}" alt="{{ $hotel->name }}" width="600px">
			<ul class="list-group m-2 responsive">
				<li class="list-group-item list-group-item-dark text-left mb-1">
					<strong>Country:</strong> 
					{{ $category->name }}
				</li>
				<li class="list-group-item list-group-item-info text-left mb-1">
					<strong>Restourants:</strong> 
					{{ $hotel->restaurants }}
				</li>
				<li class="list-group-item list-group-item-info text-left mb-1">
					<strong>Bars:</strong> 
					{{ $hotel->bars }}
				</li>
				<li class="list-group-item list-group-item-info text-left mb-1">
					<strong>Pools:</strong> 
					{{ $hotel->pools }}
				</li>
				<li class="list-group-item list-group-item-info text-left mb-1">
					<strong>All Inclusive:</strong> 
					{{ $hotel->all_inclusive ? 'yes' : 'no' }}
				</li>
				<li class="list-group-item list-group-item-success text-left mb-3">
					<strong>Raiting:</strong> 
					{{ $hotel->raiting }}
				</li>
			</ul> 	  
	  	</div>

	  	<div class="p-3 text-left">
	  		{!! $hotel->body !!}
	  	</div>

	  </div>

	  <a href="/contact/{{ $hotel->id }}" class="btn btn-primary">Contact</a>

	  <div class="card-footer">
	    <p>
	    	<strong>${{ $hotel->price }}</strong> - 
	    	<span class="text-muted">price for one person in double room (7 days)</span>
	    </p>
	  </div>

	</div>

</div>

@stop