<?php

namespace App\Http\Controllers;

use App\Models\catatan_pribadi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NotesMainController extends Controller
{

    public function index()
    {
        $id_user = Session::get('id');
        $catatan_pribadi = catatan_pribadi::where('id_user', $id_user)->get();
        return view('/NotesMain', compact('catatan_pribadi'));
    }
    public  function create()
    {
        $id_user = Session::get('id');
        catatan_pribadi::create([
            'id_user' => $id_user,
            'judul' => 'Title',
            'deskripsi' => 'Description',
        ]);
        return redirect('/NotesMain');
    }
}
