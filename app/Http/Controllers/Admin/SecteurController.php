<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Secteur;
use Illuminate\Http\Request;

class SecteurController extends Controller
{
    public function secteurs(){
        $secteurs = Secteur::all();
       return view('admin.secteurs.secteurs',compact('secteurs'));
    }
    public function secteurCreate(){
        return view('admin.secteurs.create');

    }
}
