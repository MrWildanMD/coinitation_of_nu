<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donator extends Model
{
    use HasFactory;

    protected $fillable = [
        'donator_name',
        'donator_address',
        'donator_phone'
    ];

    public function coin()
    {
        return $this->belongsTo(Coin::class, 'donator_id');
    }
}
