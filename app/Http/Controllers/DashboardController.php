<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company_not_created = false;
        $company = Company::all();
        // return $company;
        if ($company->isEmpty()) {
            $company_not_created = true;
        }
        return view('dashboard', compact('company_not_created'));
    }
}
