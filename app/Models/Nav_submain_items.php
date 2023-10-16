<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nav_submain_items extends Model
{
    use HasFactory;
    protected $table = "nav_submain_items";
    protected $fillable=['ID','submain_item_nameEN','submain_item_nameAR','submain_item_href','main_item_id'];
}
