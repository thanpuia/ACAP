<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class DashboardController extends Controller
{
    public function index()
    {
        $subjects = Course::all();

        return view('admin.dashboard.index',compact('subjects'));
    }
}
