<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function logInSubmitted(Request $request)
    {
        $rules=[
            "f_name"=>"required",
            "l_name"=>"required",
            'email'=>'required|email',
            'password'=>'required|min:8'
        ];
        $messages = [
            'required'=>"Please fill this fild",
            'email.email' => "Wrong formet",
            'password.min' => 'Minimum 8 Character'
        ];
        $this->validate($request, $rules, $messages );

        $student = new  Student();
        $student->f_name = $request->f_name;
        $student->l_name = $request->l_name;
        $student->email = $request->email;
        $student->password = $request->password;
        $student->save();

        return redirect()->route('Log_In')->with("mg","Succssfull");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
// public function loginSubmit(Request $request){
//     $student = Student::where('email',$request->email)
//                         ->where('password',$request->password)
//                         ->first();

//     // return $student;
//     if($student){
//         $request->session()->put('user',$student->email);
//         return redirect()->route('dash');
//     }
//     return back();
// }
// public function logout(){
//     session()->forget('user');
//     return redirect()->route('login');
// }