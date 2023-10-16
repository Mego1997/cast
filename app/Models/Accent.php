<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accent extends Model
{
    use HasFactory;
    protected $table = "accent";
    protected $fillable=['ID','accent_nameEN','accent_nameAR'];
    ################## Begin relations ############

    public function  models(){
        return $this ->  hasOne('App\Models\Models','Accent');
    }
    ################## End relations ############
}
