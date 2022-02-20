<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Trips;
use App\Http\Requests\TripsValidationRequest;


class TripsController extends Controller
{

    public function index()
    {
        //
    }

    public function tripsCreate()
    {
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */

        return view('dashboards.admins.tripsCrud.tripsCreate', ['trips' => Trips::all()]);
    }
                /**
                 * Display the specified resource.
                 *
                 * @param int $id
                 * @return \Illuminate\Http\Response
                 */

    public function tripsEdit($id)
    {
        /**
         * Show the form for editing the specified resource.
         *
         * @param int $id
         * @return \Illuminate\Http\Response
         */

        $trips = Trips::find($id);
        return view('dashboards.admins.tripsCrud.tripsEdit', ['trips' => Trips::find($id)]);
    }

    public function tripsStore(TripsValidationRequest $request)
    {

        /**
         * Store a newly created resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @return \Illuminate\Http\Response
         */

        $request->validate([
            'name',
            'title',
            'second_title',
            'overview',
            'description',
            'second_description',
            'price_one',
            'price_two',
            'included',
            'not_included',
            'discount'
        ]);

        $trips = Trips::create([
            'name' => $request->input('name'),
            'title' => $request->input('title'),
            'second_title' => $request->input('second_title'),
            'overview' => $request->input('overview'),
            'description' => $request->input('description'),
            'second_description' => $request->input('second_description'),
            'price_one' => $request->input('price_one'),
            'price_two' => $request->input('price_two'),
            'included' => $request->input('included'),
            'not_included' => $request->input('not_included'),
            'discount' => $request->input('discount')
        ]);

        return redirect(route('admin.tripsProfile'));
    }

    public function tripsUpdate(TripsValidationRequest $request, $id)
    {
        /**
         * Update the specified resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @param int $id
         * @return \Illuminate\Http\Response
         */

        $request->validate([
            'name',
            'title',
            'second_title',
            'overview',
            'description',
            'second_description',
            'price_one',
            'price_two',
            'included',
            'not_included',
            'discount'
        ]);

        $trip = Trips::findOrFail($id);

        $trip->update($request->except(['_token']));

        return redirect(route('admin.tripsProfile'));
    }

    public function tripsDestroy($id)
    {
        /**
         * Remove the specified resource from storage.
         *
         * @param int $id
         * @return \Illuminate\Http\Response
         */
        //
        Trips::destroy($id);
        return redirect(route('admin.tripsProfile'));
    }
}
