@extends('layouts/layout')


@section('content')

<header class="masthead">
    <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
            <h1 class="mx-auto my-0 text-uppercase">{{ $title ?? 'Find Best Hotel'}}</h1>
            <h2 class="text-white-50 mx-auto mt-2 mb-5">Get the best prices on the best hotels, worldwide</h2>
            <a class="btn btn-primary js-scroll-trigger" href="/hotels">Get Started</a>
        </div>
    </div>
</header>

@stop