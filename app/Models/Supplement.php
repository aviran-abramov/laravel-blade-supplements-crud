<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Supplement extends Model
{
    protected $table = "supplements";
    protected $fillable = ["name", "description"];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = Str::ucfirst($value);
    }

    public function setDescriptionAttribute($value)
    {
        $this->attributes['description'] = Str::ucfirst($value);
    }
}
