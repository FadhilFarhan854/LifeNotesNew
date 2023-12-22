<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_admin',
        'username',
        'password',
    ];
    protected $table = "admin";
    protected $primaryKey = 'id_admin';
    public $timestamps = false;
}
