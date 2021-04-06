<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Save;
class SaveController extends Controller
{
	 public function stores(Request $request){
    	Save::create([
    		'name' => $request->name,
    		'surname' => $request->surname,
    		'email' => $request->email,
    		'data' => $request->img
    	]);

    	return back();
}
   
}
