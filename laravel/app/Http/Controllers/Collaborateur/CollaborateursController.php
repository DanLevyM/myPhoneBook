<?php

namespace App\Http\Controllers\Collaborateur;

use App\Models\Employee;
use App\Models\Enterprise;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class CollaborateursController extends Controller
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
        $employees = Employee::all();

        return view('collaborateur.index')->with('employees', $employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'last_name' => 'required|max:80',
            'first_name' => 'required|max:80',
            'address' => 'required|max:100',
            'postcode' => 'required|max:5',
            'city' => 'required|max:50',
            'phone_number' => 'required|min:10|max:10'
        ]);

        $employee = Employee::create([
            'sexe' => $request['sexe'],
            'last_name' => $request['last_name'],
            'first_name' => $request['first_name'],
            'address' => $request['address'],
            'postcode' => $request['postcode'],
            'city' => $request['city'],
            'phone_number' => $request['phone_number'],
            'email' => $request['email'],
        ]);
        
        $employeeEntreprise = Enterprise::where('id', $request['enterprise_id'])->first();
        
        $employee->enterprises()->attach($employeeEntreprise);
        $employee->save();

        return redirect('collaborateurs');
    }

    public function edit(Employee $id)
    {
        if(Gate::denies('edit-users'))
        {
            return redirect()->route('collaborateurs.index');
        }

        $enterprises = Enterprise::all();

        return view('collaborateur.edit', [
            'employee' => $id
        ])->with('enterprises', $enterprises);    
    }

        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enterprise  $enterprise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $id)
    {
        if(Gate::denies('edit-users'))
        {
            return redirect()->route('collaborateurs.index');
        }

        $validatedData = $request->validate([
            'last_name' => 'required|max:80',
            'first_name' => 'required|max:80',
            'address' => 'required|max:100',
            'postcode' => 'required|max:5',
            'city' => 'required|max:50',
            'phone_number' => 'required|min:10|max:10'
        ]);
        
        $id->first_name = $request->first_name;
        $id->last_name = $request->last_name;
        $id->address = $request->address;
        $id->postcode = $request->postcode;
        $id->city = $request->city;
        $id->phone_number = $request->phone_number;
        $id->email = $request->email;

        $id->enterprises()->detach();
        $employeeEnterprise = Enterprise::where('id', $request['enterprise_id'])->first();
        $id->enterprises()->attach($employeeEnterprise);
        
        $id->save();
        return redirect()->route('collaborateurs.index');
    }

    public function show_form()
    {
        $enterprises = Enterprise::all();

        return view('collaborateur.create')->with('enterprises', $enterprises);
    }

        /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enterprise  $enterprise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $id)
    {
        if(Gate::denies('delete-users'))
        {
            return redirect()->route('/collaborateurs.index');
        }

        $id->delete();
        return redirect()->route('collaborateurs.index');
    }
}
