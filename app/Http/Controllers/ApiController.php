<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getUser($id = null)
    {
        if (empty($id)) {
            $users = User::get();
            return response()->json(["users" => $users]);
        }
        else {
            $users = User::find($id);
            return response()->json(["users" => $users]);
        }
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $userDate = $request->input();
            // print_r($userDate);
            User::created([
                'name' => $userDate['name'],
                'password' => $userDate['password'],
                'email' => $userDate['email'],
            ]);
            return response()->json(["message" => "account created successfully"]);
        }
    }
}
