<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkinColor extends Model
{
    use HasFactory;
    protected $table = "skincolor";
    protected $fillable=['ID','SkinColorEN','SkinColorAR'];
    ################## Begin relations ############

    public function  models(){
        return $this ->  hasOne('App\Models\Models','SkinColor');
    }
    ################## End relations ############
}
