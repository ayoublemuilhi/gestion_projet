<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UniteController extends Controller
{
    public function unites(){
        return view('admin.unites.unites');
    }
    public function uniteCreate(){
        return view('admin.unites.Create');

    }
}
