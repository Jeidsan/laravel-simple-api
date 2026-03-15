<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function status()
    {
        return response()->json(
            [
                'status' => 'OK',
                'message' => 'API is running'
            ],
            200
        );
    }

    public function clients()
    {
        $clients = Client::paginate(10);

        return response()->json(
            [
                'status' => 'OK',
                'message' => 'Success',
                'data' => $clients
            ],
            200
        );
    }
}
