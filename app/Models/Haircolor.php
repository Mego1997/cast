<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Haircolor extends Model
{
    use HasFactory;
    protected $table = "haircolor";
    protected $fillable=['ID ','HairColorEN','HairColorAR'];
    ################## Begin relations ############

    public function  models(){
        return $this ->  hasOne('App\Models\Models','HairColor');
    }
    ################## End relations ############
}
