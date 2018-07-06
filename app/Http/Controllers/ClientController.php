<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    public function getClients() {
    	$data = array('clients' => Client::All());
    	return view('clients', $data);
    }
}
