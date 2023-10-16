<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;
    protected $table = "gender";
    protected $fillable=['ID','GenderEN','GenderAR'];
    ################## Begin relations ############

    public function  models(){
        return $this ->  hasOne('App\Models\Models','Gender');
    }
    public function  Services(){
        return $this ->  hasOne('App\Models\Services','Gender');
    }
    ################## End relations ############
}
