<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Country $country)
    {

        $cities = City::where('country_id' , $country->id)->paginate(10);
        return view('cities' , compact('cities'));
    }

    public function cityUsers(City $city)
    {
        $users = User::where('city_id' , $city->id)->paginate(10);
        return view('users' , compact('users'));
    }

    public function store(Request $request)
    {
        if (Auth::user()->role != 'admin') {
            return redirect()->back()->withErrors('You do not have permission to perform this action.');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $city = City::create(
            [
                'name' => $validated['name'],
            ]
        );

        return redirect('/')->with('success', 'City created successfully.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, City $city)
    {
        if (Auth::user()->role != 'admin') {
            return redirect()->back()->withErrors('You do not have permission to perform this action.');
        }

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $city->name = $validatedData['name'];
        $city->save();

        return redirect('/')->with('success', 'City updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        if (Auth::user()->role != 'admin') {
            return redirect()->back()->withErrors('You do not have permission to perform this action.');
        }

        $city->delete();

        return redirect('/')->with('success', 'City deleted successfully.');
    }
}
