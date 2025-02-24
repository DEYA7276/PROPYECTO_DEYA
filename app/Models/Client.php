<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'last_name',
        'second_last_name',
        'email',
        'phone'

    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
