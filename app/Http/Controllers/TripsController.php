<?php

namespace App\Http\Controllers;

use App\Models\Trips;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;

//   maybe not  :/

class TripsController extends Controller
{

    public function index()
    {
        //
    }

    public function tripsCreate()
    {
        //
        return view('dashboards.admins.tripsCrud.tripsCreate', ['trips' => Trips::all()]);
    }

    public function tripsEdit($id)
    {
        //$tripsCrud = Trips::find($id)->first();
        //return redirect(route('admin.tripsCrud.tripsEdit')->with('name', $tripsCrud));
        return view('dashboards.admins.tripsCrud.tripsEdit', ['trips' => Trips::find($id)]);
    }

    public function tripsStore(Request $request)
    {
        /*
        $request->validate([
            'name' => 'required|max:30',
            'title' => 'required|max:100',
            'second_title' => 'sometimes|max:100',
            'overview' => 'required|min:3|max:1000',
            'description' => 'sometimes|max:1000',
            'second_description' => 'sometimes|max:1000',
            'price_one' => 'sometimes',
            'price_two' => 'sometimes|regex:/^([0-9\s\-\+\(\)]*)$/|min:7',
            'included' => 'sometimes|regex:/^([0-9\s\-\+\(\)]*)$/|min:8, max:20',
            'not_included' => 'sometimes',
            'discount' => 'sometimes'
        ]);
        */

        //$tripsCrud = new Trips;
        //$tripsCrud->name = $request->input('name');
        //$tripsCrud->title = $request->input('title');
        //$tripsCrud->second_title = $request->input('second_title');
        //$tripsCrud->overview = $request->input('overview');
        //$tripsCrud->description = $request->input('description');
        //$tripsCrud->second_description = $request->input('second_description');
        //$tripsCrud->price_one = $request->input('price_one');
        //$tripsCrud->price_two = $request->input('price_two');
        //$tripsCrud->included = $request->input('included');
        //$tripsCrud->not_included = $request->input('not_included');
        //$tripsCrud->discount = $request->input('discount');
        //$tripsCrud->save();

        $trips = Trips::create([
            'name' => $request->input('name'),
            'title' => $request->input('title'),
            'overview' => $request->input('overview')
        ]);

        return redirect(route('admin.tripsProfile'));
    }

    public function tripsUpdate(Request $request, $id)
    {
        $trip = Trips::findOrFail($id);

        $trip->update($request->except(['_token']));

        return redirect(route('admin.tripsProfile'));
    }

    public function tripsDestroy($id)
    {
        //
        Trips::destroy($id);
        return redirect(route('admin.tripsProfile'));
    }

}
/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
/**
 * Store a newly created resource in storage.
 *
 * @param \Illuminate\Http\Request $request
 * @return \Illuminate\Http\Response
 */
/**
 * Display the specified resource.
 *
 * @param int $id
 * @return \Illuminate\Http\Response
 */
/**
 * Show the form for editing the specified resource.
 *
 * @param int $id
 * @return \Illuminate\Http\Response
 */
/**
 * Update the specified resource in storage.
 *
 * @param \Illuminate\Http\Request $request
 * @param int $id
 * @return \Illuminate\Http\Response
 */
/**
 * Remove the specified resource from storage.
 *
 * @param int $id
 * @return \Illuminate\Http\Response
 */
/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
