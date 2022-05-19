<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function clientList(Request $request)
    {
        return view('admin.client-list');
    }
}
