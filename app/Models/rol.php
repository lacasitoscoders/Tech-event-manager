<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    protected $fillable = [
        'guest',
        'admin',
    ];

    public function users(){

        return $this->belongsToMany(User::class, 'rol_user');
    }
}
