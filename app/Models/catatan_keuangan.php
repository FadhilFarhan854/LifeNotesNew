<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catatan_keuangan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_catatan',
        'id_user',
        'judul',
    ];
    protected $table = "catatan_keuangan";
    protected $primaryKey = 'id_catatan';
    public $timestamps = false;
}
