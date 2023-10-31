<?php

namespace App\Http\Controllers;

use App\Models\school_management;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index()
    {
        $student=school_management::all();

      return view('Index')->with('student',$student);

    }
    public function create()
    {
        return view('create');

    }
    public function edit($id)
    {
        $data=school_management::find($id);
        return view('edit',compact('data'));

    }
    public function update($id, Request $request)
    {
        // Find the student record by ID
        $student = school_management::find($id);

        if (!$student) {
            // Handle the case where the student record is not found
            return redirect()->route('Index')->with('error', 'Student not found');
        }

        // Validate the request data
        $request->validate([
            'studentname' => 'required',
            'age' => 'required',
            'class' => 'required',
            'rollno' => 'required',
            'emailid' => 'required',
            'studentcity' => 'required',
            'studentimage' => '',
        ]);

        // Update student information
        $student->update([
            'studentname' => $request->input('studentname'),
            'age' => $request->input('age'),
            'class' => $request->input('class'),
            'rollno' => $request->input('rollno'),
            'emailid' => $request->input('emailid'),
            'studentcity' => $request->input('studentcity'),
        ]);

        // Handle image update
        if ($request->hasFile('studentimage')) {
            $imagePath = $request->file('studentimage')->store('public/student');
            $student->studentimage = str_replace('public/', '', $imagePath);
            $student->save(); // Save the updated student record with the new image path
        }

        return redirect()->route('Index')->with('success', 'Student updated successfully');
    }

    public function delete(school_management $id)
    {
      $id->delete();
        return redirect()->route('Index');

    }
    public function store(Request $request)
    {
        $request->validate([
            'studentname' => 'required',
            'age' => 'required',
            'class' => 'required',
            'rollno' => 'required',
            'emailid' => 'required',
            'studentimage' => 'required',
            'studentcity' => 'required',
        ]);

        $student = school_management::create($request->all());
//          dd($request);
        if ($student) {

            if ($request->hasFile('studentimage')) {
                $imagePath = $request->file('studentimage')->store('public/student');
                $student->studentimage = str_replace('public/', '', $imagePath);
                $student->save();
            }

            return redirect()->route('Index');
        } else {
            echo "Record not inserted";
        }
    }
  public function duplicate(school_management $id){
        $new=$id->replicate();
        $new->save();
        return redirect()->back();

  }
}
