<?php

namespace App\Http\Controllers\Enterprise;

use App\Http\Controllers\Controller;
use App\Models\Enterprise;
use Illuminate\Http\Request;

class EnterprisesController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enterprises = Enterprise::all();

        return view('enterprise.index')->with('enterprises', $enterprises);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:enterprises|max:80',
            'address' => 'required|max:100',
            'postcode' => 'required|max:5',
            'city' => 'required|max:50',
            'phone_number' => 'required|min:10|max:10'
        ]);

        $enterprise = new Enterprise;

        $enterprise->name = $request['name'];
        $enterprise->address = $request['address'];
        $enterprise->postcode = $request['postcode'];
        $enterprise->city = $request['city'];
        $enterprise->phone_number = $request['phone_number'];
        $enterprise->email = $request['email'];
        
        $enterprise->save();

        return redirect('enterprises');
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
     * Display the specified resource.
     *
     * @param  \App\Models\Enterprise  $enterprise
     * @return \Illuminate\Http\Response
     */
    public function show(Enterprise $enterprise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enterprise  $enterprise
     * @return \Illuminate\Http\Response
     */
    public function edit(Enterprise $enterprise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enterprise  $enterprise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enterprise $enterprise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enterprise  $enterprise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enterprise $enterprise)
    {
        //
    }

        public function show_form()
    {
        return view('enterprise.create');
    }

    public function enterprise_details(Enterprise $id)
    {
        return view('enterprise.details', [
            'enterprise' => $id,
        ]);
    }
}
