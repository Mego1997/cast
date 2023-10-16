<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nav_main_items extends Model
{
    use HasFactory;
    protected $table = "nav_main_items";
    protected $fillable=['ID','main_item_nameEN','main_item_nameAR','main_item_hassub','main_item_href'];
}
