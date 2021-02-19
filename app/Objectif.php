<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objectif extends Model
{
    protected $table = "objectifs";
    protected $fillable = ["objectif","secteur_id","created_at","updated_at"];
    ####################### Start relation #####################
    public function  secteurs(){
        return $this->hasMany('App\Secteur','secteur_id','id');
    }


    ####################### End relation #####################
}
