<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{

    public function index(){
    
    $jobs =Job::all();
    
        return view('welcome',['jobs'=>$jobs]);
    }
    public function create()
    {
        return view('jobs.create');
    }

    public function store(Request $request)
    {
        $job = new Job;

        $job->title = $request->title;
        $job->description = $request->description;
        $job->salary = $request->salary;
        $job->company = $request->company;
        $job->work_model = $request->input('workmodel');
        $job->workplace = $request->workplace;
        $job->email = $request->email;
        $job->workschedule = $request->workschedule;
        $job->phone = $request->phone;
        $job->website = $request->website;

        $job->save();

        return redirect('/');

        
    }
}
