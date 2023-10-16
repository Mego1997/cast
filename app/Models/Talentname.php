<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talentname extends Model
{
    use HasFactory;
    protected $table = "talentname";
    protected $fillable=['ID','TalentNameEN','TalentNameAR'];
    ################## Begin relations ############

    public function  models(){
        return $this ->  hasOne('App\Models\Models','Talent');
    }
    ################## End relations ############
}
