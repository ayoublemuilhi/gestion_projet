<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secteur extends Model
{
    protected $table = "secteurs";
    protected $fillable = ["T_secteur","created_at","updated_at"];

    ####################### Start relation #####################
    public function  objectifs(){
        return $this->hasOne('App\Objectif','secteur_id','id');
    }


    ####################### End relation #####################

}
