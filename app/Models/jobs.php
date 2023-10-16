<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobs extends Model
{
    use HasFactory;
    protected $table = "jobs";
    protected $fillable=['ID','job_nameEN','job_nameAR','specialization_id'];
    ################## Begin relations ############
    public function  services(){
        return $this ->  hasOne('App\Models\Services','job');
    }
    ################## End relations ############
}
