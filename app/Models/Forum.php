<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_saluran',
        'id_admin',
        'judul',
        'deskripsi',
        'times',
    ];

    protected $table = "saluran";
    protected $primaryKey = 'id_saluran';
    public $timestamps = false;
}
