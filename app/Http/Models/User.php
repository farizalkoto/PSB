<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    protected $primaryKey = 'user_id';

    protected $fillable = ['user_name', 'user_pass', 'user_type', 'user_verified',  'remember_token', 'created_at', 'updated_at'];

    public function getAuthPassword() {
	    return $this->user_pass;
	}

	public function studentPersonal()
    {
        return $this->belongsTo(StudentPersonal::class, 'user_id', 'user_id');
    }

    public function registry()
    {
        return $this->belongsTo(Registry::class, 'user_id', 'user_id');
    }
}
