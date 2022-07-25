<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use Illuminate\Http\Request;

class StudentController extends Controller
{


    public function APIStudentList(){

        $student = Student::all();
    
        return $student;
      }
    
      public function APIStudentAdd(Request $request)
      {
    
        $student = new Student();
        $student->name = $request->name;
        $student->password = $request->password;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->save();
    
        return $request;
      }

}
