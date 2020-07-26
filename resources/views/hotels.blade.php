@extends('layouts/layout')


@section('content')

<div class="nav_bg"></div>

<div class="container_gray">

	<h1 class="text-center mt-3 responsive_heading">Find the Best Hotel For a Vacation that You Deserve!</h1>

	@foreach($hotels as $hotel)

		<div class="container-fluid container_width">
		    <div class="row">
		        <div class="col-12 mt-3">
		            <div class="card">
		                <div class="card-horizontal">

		                    <div class="img-square-wrapper">
		                        <img class="" src="/images/{{ $hotel->image }}" alt="{{ $hotel->name }}" width="450">
		                    </div>

		                    <div class="card-body">
		                    	<a class="btn btn-secondary button_link" href="/hotels/{{ $hotel->id }}" role="button">More</a>
		                        <h4 class="card-title"><strong>{{ $hotel->name }}</strong></h4>
		                        <p>
									@for ($i = 0; $i < $hotel->stars; $i++)
									    <i class="fas fa-star gold"></i>
									@endfor		                        	
		                        </p>
		                        <p class="card-text">{{ $hotel->abstract }}</p>
		                        <p><span class="text-muted">Raiting:</span> <strong>{{ $hotel->raiting }}</strong></p>
		                        <p><strong>${{ $hotel->price }}</strong> - <span class="text-muted">price for one person in double room (7 days)</span></p>
		                    </div>

		                </div>

		                <div class="card-footer">
		                    <small class="text-muted">{{ $hotel->category->name }}</small>
		                </div>

		            </div>
		        </div>
		    </div>
		</div>

    @endforeach

    <p class="text-center"><a href="#">Top of Page</a></p>	

</div>

@stop