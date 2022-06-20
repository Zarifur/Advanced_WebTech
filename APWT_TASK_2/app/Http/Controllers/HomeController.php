<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\login;


use App\Models\Student;


class HomeController extends Controller
{
    public function index(){

        return view('home');
    }
    public function index1(){
        if(Session('user')){
            session()->forget('user');
        }

        return view('Log_In');
    }
    public function index2(){

        return view('reg');
    }

    public function index3(){

        return view('dash');
    }

    // public function loginSuccess(){
    //     if(!empty($mg)){
    //         return view('Log_In')->with("mg","Succssfull");
    //     }

    //     return view('Log_In');
    // }
    public function loginal(Request $request){
        // return view('dash'); 
        $student = Student::where('email',$request->email)
                            ->where('password',$request->password)
                            ->first();
                            // return redirect()->route('dash');
                            if(!$student){
                                return view('Log_In')->with('message', 'Email or Password is invalid');
                            }  

        // return $student;
        if($student){
            $request->session()->put('user',$student->email);
            return redirect()->route('dash');
        }
        return back();
    }
    public function logout(){
    session()->forget('user');
    return redirect()->route('Log_In');
    }


}
