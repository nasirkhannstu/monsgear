<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminpanelController extends Controller
{
    public function getIndex(){
    	return view('adminpanel.index');
    }
}
