<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $primaryKey = 'department_id';

    protected $fillable = ['department_tag', 'department_name', 'desc', 'department_max', 'created_at', 'updated_at'];

    public function registryOption1()
    {
        return $this->hasMany(Registry::class, 'registry_option1', 'department_id')->where('registry_verified', '1')->orderBy('registry_score_total', 'DESC')->orderBy('registry_date', 'ASC');
    }

    public function registryOption2()
    {
        return $this->hasMany(Registry::class, 'registry_option2', 'department_id')->where('registry_verified', '1')->orderBy('registry_score_total', 'DESC')->orderBy('registry_date', 'ASC');
    }

}
