<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use \App\Hotel;
use \App\Category;

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
        return view('admin/hotels/index', compact('title','hotels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Add Hotel';
        $categories = \App\Category::all();
        return view('admin/hotels/create', compact('title','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation
        $valid = $request->validate([
            'name' => 'required|string|max:255',
            'abstract' => 'required|string|max:500',
            'body' => 'required|string',
            'image' => 'nullable|image',
            'stars' => 'required|integer|between:1,5',
            'restaurants' => 'required|integer|between:0,99',
            'bars' => 'required|integer|between:0,99',
            'pools' => 'required|integer|between:0,99',
            'price' => 'required|integer|between:0,99999',
            'raiting' => 'required|in:poor,fair,good,very good,excellent',
            'all_inclusive' => 'required|string|max:3',
            'category_id' => 'required|integer'
        ]);
        
        // if image provided save in by a few steps        
        if(!empty($valid['image'])){
            $file = $request->file('image'); // get the uploaded file
            $image = time() . '_' . $file->getClientOriginalName(); //get the original filename
            $path = $file->storeAs('images', $image); // save the image in storage folder (link added)
        }

        // save the new record in database
        Hotel::create([
            'name' => $valid['name'],
            'abstract' => $valid['abstract'],
            'body' => $valid['body'],
            'image' => $image ?? '900x600.png',
            'stars' => $valid['stars'],
            'restaurants' => $valid['restaurants'],
            'bars' => $valid['bars'],
            'pools' => $valid['pools'],
            'price' => $valid['price'],
            'raiting' => $valid['raiting'],
            'raiting' => $valid['raiting'],
            'all_inclusive' => $valid['all_inclusive'] == 'no' ? false : true,
            'category_id' => $valid['category_id']
        ]);

        // redirect back to list view with flash message
        return redirect('/admin')->with('success', 'Your post was saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit Hotel Data';
        $hotel = Hotel::find($id);
        $categories = Category::all();

        return view('admin/hotels/edit', compact('title','categories','hotel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // validate the record beeing updated
        $valid = $request->validate([
            'name' => 'required|string|max:255',
            'abstract' => 'required|string|max:500',
            'body' => 'required|string',
            'image' => 'nullable|image',
            'stars' => 'required|integer|between:1,5',
            'restaurants' => 'required|integer|between:0,99',
            'bars' => 'required|integer|between:0,99',
            'pools' => 'required|integer|between:0,99',
            'price' => 'required|integer|between:0,99999',
            'raiting' => 'required|in:poor,fair,good,very good,excellent',
            'all_inclusive' => 'required|string|max:3',
            'category_id' => 'required|integer',
            'id' => 'required|integer'
        ]);

        // if image provided save the file in storage and get the name of the image
        if(!empty($valid['image'])){
            $file = $request->file('image'); // get the uploaded file
            $image = time() . '_' . $file->getClientOriginalName(); //get the original filename
            $path = $file->storeAs('images', $image); // save the image (link to storage added) 
        }

        // find the record in database
        $hotel = Hotel::find($valid['id']);

        // assign new values (validated)
        $hotel->name = $valid['name'];
        $hotel->abstract = $valid['abstract'];
        $hotel->body = $valid['body'];
        if(!empty($image)){
            $hotel->image = $image; // saving just a filename            
        }
        $hotel->stars = $valid['stars'];
        $hotel->restaurants = $valid['restaurants'];
        $hotel->bars = $valid['bars'];
        $hotel->pools = $valid['pools'];
        $hotel->price = $valid['price'];
        $hotel->raiting = $valid['raiting'];
        $hotel->all_inclusive = $valid['all_inclusive'] == 'no' ? false : true;
        $hotel->category_id = $valid['category_id'];

        // if changes were made redirect to list view with success message
        if( $hotel->save()){
            return redirect('/admin')->with('success', '"' .$hotel->name . '" has been successfully updated!');
        }

        // something went wrong, redirect to list view with error message
        return redirect('/admin')->with('error', 'There was a problem updating the post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        // validated - make sure id is passed in requiest
        $valid = $request->validate([
            'id' => 'required|integer'
        ]);

        // try to delete the post and send the user back with a flash message
        if(Hotel::find($valid['id'])->delete()){
            return back()->with('success', 'Hotel has been deleted in database!');
        }

        // if deletion wasn't successful
        return back()->with('error', 'There was a problem deleting that post');
    }
}
