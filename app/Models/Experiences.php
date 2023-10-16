<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experiences extends Model
{
    use HasFactory;
    protected $table = "experiences";
    protected $fillable=['ID','experiences_nameEN','experiences_nameAR'];
    ################## Begin relations ############

    public function  models(){
        return $this ->  hasOne('App\Models\Models','Experiences');
    }

    ################## End relations ############
}
