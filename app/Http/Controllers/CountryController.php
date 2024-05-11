<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Exports\CountryExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;
class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        if($request->deleted){
            $countries = Country::onlyTrashed()->paginate(10);
        }
        else
            $countries = Country::paginate(10);
        return view('dashboard' , compact('countries' , 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addCountry');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string'
        ]);
        $country = Country::create([
            'name' => $validated['name'],
        ]);
        return redirect('/');
    }


    public function export()
    {
        return Excel::download(new CountryExport, 'countries.xlsx');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Country $country)
    {
        return view('editCountry',compact('country'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Country $country)
    {
        $validated = $request->validate([
            'name' => 'required|string'
        ]);
         $country->update([
            'name' => $validated['name'],
         ]);
         return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country)
    {
        $country->delete();
        return redirect()->back();
    }
}
