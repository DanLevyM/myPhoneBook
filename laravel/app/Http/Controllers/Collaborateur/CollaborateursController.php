<?php

namespace App\Http\Controllers\Collaborateur;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

        $employee = new Employee;

        $employee->sexe = $request['sexe'];
        $employee->last_name = $request['last_name'];
        $employee->first_name = $request['first_name'];
        $employee->address = $request['address'];
        $employee->postcode = $request['postcode'];
        $employee->city = $request['city'];
        $employee->phone_number = $request['phone_number'];
        $employee->email = $request['email'];
        
        $employee->save();

        return redirect('collaborateurs');
    }

    public function show_form()
    {
        return view('collaborateur.create');
    }


}
