<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserToken extends Model
{
    protected $fillable = [
        'token',
        'type',
        'is_used',
        'expires_at'
    ];

    protected $hidden = [
        'token'
    ];

    protected $cast = [
        'is_used' => 'boolean',
        'expeires_at' => 'datetime'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
