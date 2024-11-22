<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplement extends Model
{
    protected $table = "supplements";
    protected $fillable = ["name", "description"];
}
