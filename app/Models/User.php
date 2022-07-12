<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_id',
        'user_name',
        'user_email',
        'user_password',
        'user_address'
    ];

    public function coin()
    {
        return $this->belongsTo(Coin::class, 'user_id');
    }

    public function role()
    {
        return $this->belongsTo(UserRole::class, 'role_id');
    }
}
