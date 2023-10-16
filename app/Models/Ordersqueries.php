<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordersqueries extends Model
{
    use HasFactory;
    protected $table = "ordersqueries";
    protected $fillable=['ID','OMName','OFullName','OPhone','OEmail','OMassage'];
}
