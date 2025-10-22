<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'username',
        'password',
        'name',
        'email',
        'department_id',
        'section_id',
        'position_id',
        'role_id',
        'is_active',
    ];

    public function userTokens()
    {
        return $this->hasMany(UserToken::class);
    }

    public function departments()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function sections()
    {
        return $this->belonsTo(Section::class, 'section_id');
    }

    public function positions()
    {
        return $this->belongsTo(Position::class, 'position_id');
    }

    public function roles()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
}
