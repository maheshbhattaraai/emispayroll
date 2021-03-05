<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobTypeController extends Controller
{
    function index()
    {
        return view('admin.job-type');
    }
}
