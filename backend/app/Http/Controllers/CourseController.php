<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use PDO;

class CourseController extends Controller
{
    //
    function addCourse(Request $request){
        $instructors = User::whereIn('name',$request->instructors)
                        ->where('user_type','Instructor')
        ->get()->toArray();

        $students = User::whereIn('name',$request->instructors)
                        ->where('user_type','Student')
        ->get()->toArray();
        
        $course = Course::create([
            'name' =>$request->name,
            'instructors' =>$instructors,
            'students'=>$students
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'course created successfully',
            'user' => $course,

        ]);
    }
    function getCourse($id){
        $course = Course::find($id);
        return response()->json([
            'status' => 'success',
            'course' => $course,

        ]);
    }
    function addUser($id,Request $request){
        $course = Course::find($id);
        $user =User::where('_id', $request->user_id)->first()->toArray();
        // return $user;
        $oldInstructors =$course->students;
        // return $oldInstructors;
        $newInstructors = [...$oldInstructors,$user];
        // $newInstructors = array_push($oldInstructors,...$user);
        return $newInstructors;
        // return $course->instructors;
        $course->instructors = $user;
        $course->save();
        return $course;
    }
}
