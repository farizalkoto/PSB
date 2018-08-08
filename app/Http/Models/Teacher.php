<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = ['name', 'gender', 'birthday', 'url', 'birthpalce', 'gol', 'created_at', 'updated_at'];
}
