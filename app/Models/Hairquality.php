<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hairquality extends Model
{
    use HasFactory;
    protected $table = "hairquality";
    protected $fillable=['ID','HairQualityEN','HairQualityAR'];
    ################## Begin relations ############
    public function  models(){
        return $this ->  hasOne('App\Models\Models','HairQuality');
    }
    ################## End relations ############
}
