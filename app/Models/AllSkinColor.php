<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllSkinColor extends Model
{
    use HasFactory;
    protected $table = "skincolor";
    protected $fillable=['ID ','SkinColorEN','SkinColorAR'];
}
