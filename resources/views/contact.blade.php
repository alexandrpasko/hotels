@extends('layouts/layout')


@section('content')

<header class="masthead contact-section">
    <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center container_width">
        	<h1 class="text-white-50 mx-auto mt-0 mb-2">Contact Us</h1>
	        <form>
	          <!-- inputs -->
	          <div class="form-group">
	            <div class="input-group">
	              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
	            </div>
	          </div>
	          <div class="form-group">
	            <div class="input-group">
	              <input type="text" class="form-control" name="last_name" id="name" placeholder="Last Name">
	            </div>
	          </div>          
	          <div class="form-group">
	            <div class="input-group">
	              <input type="text" class="form-control" name="email" id="email" placeholder="Email">
	            </div>
	          </div>
	          <div class="form-group">
	            <textarea class="form-control" name="message" id="message" rows="3" placeholder="Message">{{ !empty($message) ? $message : '' }}</textarea>
	          </div>

	          <!-- buttons -->
	          <p class="text-center mb-3">
	            <button type="submit" class="btn btn-primary submit mt-2 mb-3">Submit</button>
	          </p>
	        </form>

	       	<div class="social d-flex justify-content-center mt-2">
	            <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
	            <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
	            <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
	        </div>
        </div>

    </div>

</header>

@stop