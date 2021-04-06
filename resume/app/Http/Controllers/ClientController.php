<?php

namespace App\Http\Controllers;

use App\Models\Client;

use Illuminate\Http\Request;
class ClientController extends Controller
{
    public function index(){
$clients = Client::all();
return view('client.index')->with(['clients' => $clients]);
    }

    public function get_client($id){
    	$client = Client::find($id);

    	if ($client == null)
    		return response(['message' => 'client not found'], 404);

    	return view('client.detail')->with(['client' => $client]);
    }
     public function store(Request $request){
    	Client::create([
    		'name' => $request->name,
    		'surname' => $request->surname,
    		'age' => $request->age
    	]);

    	return back();
}

}