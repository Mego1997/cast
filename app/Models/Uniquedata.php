<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uniquedata extends Model
{
    use HasFactory;
    protected $table = "uniquedata";
    protected $fillable=['ID','UniqueEN','UniqueAR'];
    ################## Begin relations ############

    public function  models(){
        return $this ->  hasOne('App\Models\Models','Uniquedata');
    }
    ################## End relations ############
}
