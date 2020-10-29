<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user = auth()->user();
        return view("resume", compact('user'));
    }

    public function download()
    {
        $user = auth()->user();
        $pdf = \PDF::loadView('resume', compact('user'));
        return  $pdf->download('your_resume.pdf');

    }
}
