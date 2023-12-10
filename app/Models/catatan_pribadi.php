<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catatan_pribadi extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_catatan',
        'id_user',
        'judul',
        'deskripsi',
    ];

    protected $table = "catatan_pribadi";
    protected $primaryKey = 'id_catatan';
    public $timestamps = false;
}
