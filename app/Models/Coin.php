<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'donator_id',
        'coin_amount',
        'coin_date',
        'coin_proof'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'user_id');
    }

    public function donator()
    {
        return $this->hasOne(Donator::class, 'donator_id');
    }
}
