<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserType;
use App\Models\Course;
use App\Models\Assignment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TestController extends Controller
{
    //
    function getUsers(){
        $users = User::all();
        $types = UserType::all();
        $course = Course::all();
        // $user = User::where('name','Khodor')->get();
        $user = new User();
        
        return $user->userType;




        return response()->json([
            "status" => "Success",
            "data" => $user
        ]);
    }
    function createInstructor(Request $request){
        // $user = new User();
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_type' => $request->user_type,
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'User created successfully',
            'user' => $user
        ]);

    }
    function getCourses(){
        $course = Course::where('name','Java')->first();
        return $course->students[0];

        return response()->json([
            'user' => $course[0]->students
        ]);
    }
}
