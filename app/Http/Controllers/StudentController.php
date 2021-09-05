<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Http\Resources\StudentResource;
use App\Http\Resources\StudentCollection;
use Validate;
use File;
use Storage;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new StudentCollection(Student::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $request->validate([
            'hoTen' => 'required',
            'diaChi' => 'required',
            'lop' => 'required'
        ]);
       
        $student = new Student();
        if ($request['anh']) {
            //them image
        $image = $request['anh'];
        $extension = $image->getClientOriginalExtension();
        $name = time().'_'.$image->getClientOriginalName();
        Storage::disk('public')->put($name,File::get($image));
        $student->anh = $name;
        }
        else {
            $student->anh = "default.png";
        }
       
        $student->hoTen = $data['hoTen'];
        $student->diaChi = $data['diaChi'];
        $student->lop = $data['lop'];
        $student->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return new StudentResource($student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($student)
    {
        $data = Student::find($student);
        return view('pages.update')->with(compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$student)
    {
        $student = Student::find($student);
        $data = $request->validate([
            'hoTen' => 'required',
            'diaChi' => 'required',
            'lop' => 'required'
        ]);
        $student->hoTen = $data['hoTen'];
        $student->diaChi = $data['diaChi'];
        $student->lop = $data['lop'];
        if ($request['anh']) {
            if ($student->anh != null) {
                unlink('public/upload/'.$student->anh);
            }
            //them image
            $image = $request['anh'];
            $extension = $image->getClientOriginalExtension();
            $name = time().'_'.$image->getClientOriginalName();
            Storage::disk('public')->put($name,File::get($image));
            $student->anh = $name;
        }
        $student->save();
        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->back();
    }
}
