<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function create()
    {
        return view('jobs.create');
    }
}