<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'username',
        'password',
    ];

    protected $table = "user";
    protected $primaryKey = 'id_user';
    public $timestamps = false;
}
