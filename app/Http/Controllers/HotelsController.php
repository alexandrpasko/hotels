<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Hotels';
        $hotels = \App\Hotel::with('category')->latest()->get();
        return view('hotels', compact('title','hotels'));
    }

    /**
     * display a home page
     */
    public function home()
    {
        $title = 'Find Best Hotel';
        return view('myhome', compact('title'));
    }

    /**
     * display an about page
     */
    public function about()
    {
        $title = 'About Us';
        return view('about', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display a single hotel page with details.
     *
     * @param  int  $id (id on the hotel in database)
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hotel = \App\Hotel::find($id);
        $category = \App\Category::find($hotel->category_id);
        $title = $hotel->name;
        return view('show', compact('hotel', 'category', 'title'));
    }

    /**
     * display contact page with initial info about a specific hotel
     * @param  [type] $id (id on the hotel in database)
     */
    public function contact($id)
    {
        $hotel = \App\Hotel::find($id);
        $category = \App\Category::find($hotel->category_id);
        $title = 'Contact Us';
        $message = 'Hi, I am interested in 7 day tour to ' . $hotel->name . ' in ' . $category->name . '. Please contact me with more details as soon as possible!';
        return view('contact', compact('hotel', 'category', 'title', 'message'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
