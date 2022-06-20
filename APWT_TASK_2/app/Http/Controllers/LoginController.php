<?php


namespace App\Http\Controllers;
use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\UpdateLoginRequest;
use App\Models\login;


use App\Models\Student;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginSubmit(Request $request){
        return redirect()->route('dash');
        // $student = Student::where('email',$request->email)
        //                     ->where('password',$request->password)
        //                     ->first();

        // // return $student;
        // if($student){
        //     $request->session()->put('user',$student->email);
        //     return redirect()->route('dash');
        // }
        // return back();
    }
    public function logout(){
        session()->forget('user');
        return redirect()->route('Log_In');
    }
}
