<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function findUsers(Request $request)
    {
        $clients = Client::get();
        return $clients;

    }
}
