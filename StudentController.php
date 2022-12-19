<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;

class StudentController extends Controller
{
    //
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $student = new Student;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->course = $request->course;
        $student->section = $request->section;
        $student->save();
        return redirect()->back()->with('status','Student Added Successfully');
    }

    public function index()
    {
        $student = Student::all();
        return view('index', compact('student'));
    }
    public function edit($id)
    {
      
        $student = Student::find($id);
       
        return view('edit', compact('student'));
    }
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->course = $request->course;
        $student->section = $request->section;
        $student->update();
        return redirect()->back()->with('status','Student Updated Successfully');
    }
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->back()->with('status','Student Deleted Successfully');
    }

    public function images()
    {
        return view('image');
    }

    public function image(Request $request)
    {
        $student = new Teacher;
        $student->name = $request->input('name');

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/students/', $filename);
            $student->image = $filename;
        }
       
        $student->save();
     
        return redirect()->back()->with('message','Student Image Upload Successfully');
    }
    public function index1()
    {
        $student = Teacher::all();
        return view('index1', compact('student'));
    }
}
