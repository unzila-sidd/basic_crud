<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\subject;

class SubjectController extends Controller
{
    public function addSubject(){
        return view('add-subject');
    }
    public function createSubject(REQUEST $request){
       $subject = new subject();
        $subject->name = $request->name;
        $subject->save();
        return back()->with('subject_created','Subject has been Added Successfully');
    }
    public function getSubject(){
        $subjects = subject::orderBy('id','desc')->get();
        return view('subject',compact('subjects'));

    }
    public function getSubjectByIds($id){
        $subjects = subject::where('id',$id)->first();
        return view('/single-subject',compact('subjects'));
    }
    public function deleteSubject($id){
        Subject::where('id',$id)->delete();
        return back()->with('subject_deleted','Subject has been deleted');
    }
}
