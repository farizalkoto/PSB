<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Registry extends Model
{
    protected $primaryKey = 'registry_id';

    protected $fillable = ['user_id', 'registry_option1', 'registry_option2', 'registry_score_total', 'registry_status', 'registry_date', 'registry_verified', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function option1()
    {
        return $this->belongsTo(Department::class, 'registry_option1', 'department_id');
    }

    public function option2()
    {
        return $this->belongsTo(Department::class, 'registry_option2', 'department_id');
    }
}
