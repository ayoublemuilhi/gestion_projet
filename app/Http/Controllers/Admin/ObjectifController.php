<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ObjectifController extends Controller
{
    public function objectifs(){
        return view('admin.objectifs.objectifs');
    }
    public function objectifCreate(){
        return view('admin.objectifs.Create');

    }
}
