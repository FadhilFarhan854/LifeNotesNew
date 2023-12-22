<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catatan_Todolist extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_catatan',
        'id_user',
        'todolist',
        'status',
    ];

    protected $table = "catatan_todolist";
    protected $primaryKey = 'id_catatan';
    public $timestamps = false;
}
