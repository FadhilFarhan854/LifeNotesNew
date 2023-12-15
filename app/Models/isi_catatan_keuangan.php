<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class isi_catatan_keuangan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_catatan',
        'deskripsi',
        'keuangan',
        'tanggal',
    ];
    protected $table = "isi_catatan_keuangan";
    protected $primaryKey = 'id_catatan';
    public $timestamps = false;
}
