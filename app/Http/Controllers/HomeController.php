<?php

namespace App\Http\Controllers;

use App\Models\school_management;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index()
    {
        $data=school_management::all();
//        dd($data);
      return view('Index',compact('data'));

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
    public function update( $data ,Request $request)
    {
        $data=school_management::find($data);
//          dd($request);
        $data->update($request->all());
        return redirect()->route('Index');

    }
    public function delete(school_management $id)
    {
      $id->delete();
        return redirect()->route('Index');

    }
    public function store(Request $request){
//        dd($request);

        $request->validate(['studentname'=>'required',

            'age'=>'required','class'=>'required','rollno'=>'required','emailid'=>'required','studentimage'=>'required','studentcity'=>'required'

        ]);
        $student=school_management::create($request->all());
        if ($student){
            return redirect()->route('Index');
        }else{
            echo "record not insert";
        }


    }
}
