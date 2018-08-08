<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = ['name', 'url', 'created_at', 'updated_at'];
}
