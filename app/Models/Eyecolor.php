<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eyecolor extends Model
{
    use HasFactory;
    protected $table = "eyecolor";
    protected $fillable=['ID','ColorEN','ColorAR'];
    ################## Begin relations ############

    public function  models(){
        return $this ->  hasOne('App\Models\Models','EyeColor');
    }
    ################## End relations ############
}
