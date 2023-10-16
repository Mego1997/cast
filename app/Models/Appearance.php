<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appearance extends Model
{
    use HasFactory;
    protected $table = "appearance";
    protected $fillable=['ID','appearanceEN','appearanceAR'];
    ################## Begin relations ############

    public function  models(){
        return $this ->  hasOne('App\Models\Models','Appearance');
    }
    ################## End relations ############
}
