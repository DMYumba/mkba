<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function CustomerDashboard(){

        return view('customer.customer_dashboard');

    } //End method
}
