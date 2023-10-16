<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submenuitems extends Model
{
    use HasFactory;
    protected $table = "submenuitems";
    protected $fillable=['ID','submenuItemName','submenuItemHref'];
}
