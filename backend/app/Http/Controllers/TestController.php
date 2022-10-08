<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //
    function getUsers(){
        $users = User::all();
        return response()->json([
            "status" => "Success",
            "data" => $users
        ]);
    }
}
