<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
class StudentController extends Controller
{
    public function addStudent(){
        return view('add-student');
    }
    public function createStudent(REQUEST $request){
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->save();
        return back()->with('student_created','Student added Successfully');
    }
    public function getStudent(){
        $students = Student::orderBy('id','desc')->get();
        return view('student',compact('students'));
    }
    public function getStudentbyId($id){
        $students=Student::where('id',$id)->first();
        return view('/single-student',compact('students'));
    }
    public function deleteStudent($id){
        Student::where('id',$id)->delete();
        return back()->with('student_delete','Student has been deleted');
    }
    public function editStudent($id)
    {
        $student=Student::find($id);
        return view('/edit-student',compact('student'));
    }
    public function updateStudent(Request $request){
        $student = Student::find($request->id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->save();
        return back()->with('student_updated','Student has been updated');
    }
}
