<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndicateurController extends Controller
{
    public function indicateurs(){
        return view('admin.indicateurs.indicateurs');
    }
    public function indicateurCreate(){
        return view('admin.indicateurs.Create');

    }
}
