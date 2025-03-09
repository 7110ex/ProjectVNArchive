<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;



class ProjectController extends Controller
{
    public function index(Project $project) //インポートしたProjectをインスタンス化して$projectとして使用。
    {
        return $project->get(); //$projectの中身を戻り値にする。
    }
}
