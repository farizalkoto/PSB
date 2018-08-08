<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = ['key', 'value', 'created_at', 'updated_at'];
}
