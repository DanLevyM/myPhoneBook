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
}
