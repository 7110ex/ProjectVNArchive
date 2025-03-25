<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;



class ProjectController extends Controller
{
    public function index(Project $project) //インポートしたProjectをインスタンス化して$projectとして使用。
    {
        return view('projects.index')->with(['projects' => $project->getPaginateByLimit()]);
    }

    public function show(Project $project)
    {
        return view('projects.show')->with(['project' => $project]);
        //'project'はbladeファイルで使う変数。中身は$projectはid=1のProjectインスタンス。
    }
}
