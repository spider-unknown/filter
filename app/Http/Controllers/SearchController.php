<?php

namespace App\Http\Controllers;

use App\User;
use App\Task;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request){
        return Task::filter($request)->get();
    }

    public function mylists()
    {

    }

}
