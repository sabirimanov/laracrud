<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';
    public $timestamps = true;

    protected $casts = [
        'monthly_fee' => 'float'
    ];

    protected $fillable = [
        'first_name',
        'last_name',
        'avatar',
        'description',
        'monthly_fee',
        'created_at'
    ];
}
