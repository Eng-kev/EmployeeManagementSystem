<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Department;
use App\Employee;
use App\Country;
use App\User;
class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

            $employeeCount = Employee::count();
            // dd($employeeCount); die;
            $departments = DB::table('department')->count();
            $countries = DB::table('country')->count();
            $countries = DB::table('country')->count();
			$users = User::count();

        return view('dashboard', ['employeeCount' => $employeeCount, 'countries'
        => $countries, 'departments' => $departments,'users' => $users ]);
    }

    public function indexDashbord()
    {
        $employees = DB::table('employees')->count();
            $departments = DB::table('department')->count();
            $countries = DB::table('country')->count();
            $countries = DB::table('country')->count();
			$users = db::table('users')->count();
    }
}
