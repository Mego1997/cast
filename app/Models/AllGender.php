<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllGender extends Model
{
    use HasFactory;
    protected $table = "gender";
    protected $fillable=['ID','GenderEN','GenderAR'];
}
