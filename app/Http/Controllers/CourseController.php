<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
     
    public function index()
    {
        $subjects = Course::paginate(20);
        return view ('course.index',compact('subjects'));
    }

     
    public function create()
    {
        $subjects = Course::all();

        return view('course.create',compact('subjects'));
    }

   
    public function store(Request $request)
    {
        $subject = new Course();
        $subject->name = $request['name'];
        $subject->details= $request['details'];
        $subject->save();
        
        return redirect('course');

    }

    
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        $course = Course::find($id);
        $subjects = Course::all();

        return view ('course.edit',compact('course','subjects'));
    }

   
    public function update(Request $request, $id)
    {
        $course = Course::find($id);
    
        $course->name = $request['name'];
        $course->details= $request['details'];
        $course->save();

        return redirect('course');
    }

    
    public function destroy($id)
    {
        $data = Course::find($id)->delete();

        return redirect('course');
    }

    public function restore($id){

        Course::withTrashed()->find($id)->restore();

        return redirect('course');
    }

}
