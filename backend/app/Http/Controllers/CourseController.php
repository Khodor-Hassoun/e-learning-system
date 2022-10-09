<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    function addCourse(Request $request){
        $instructors = User::whereIn('name',$request->instructors)
                        ->where('user_type','Instructor')
        ->get()->toArray();
        
        $course = Course::create([
            'name' =>$request->name,
            'instructors' =>$instructors,
            'students'=>$request->students
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'course created successfully',
            'user' => $course,

        ]);
    }
}
