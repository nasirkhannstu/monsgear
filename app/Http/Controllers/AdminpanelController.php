<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminpanelController extends Controller
{


	public function __construct()
    {
        $this->middleware('customer.auth');
    }
    public function getIndex(){
    	return view('adminpanel.index');
    }
}
