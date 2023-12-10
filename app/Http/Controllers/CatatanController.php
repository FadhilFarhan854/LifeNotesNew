<?php

namespace App\Http\Controllers;

use App\Models\catatan_pribadi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class CatatanController extends Controller
{
    public function index($id_catatan)
    {
        $catatan_pribadi = catatan_pribadi::where('id_catatan', $id_catatan)->first();
        return view('/Catatan', ['catatan_pribadi' => $catatan_pribadi]);
    }
    public function search(Request $request){
        $id_user = Session::get('id');
        $search = $request->search;
        $catatan_pribadi = catatan_pribadi::where('judul', $search)->where('id_user', $id_user)->get();
        return view('/NotesMain', ['catatan_pribadi' => $catatan_pribadi]);
    }
    public function create(){
        $id_user = Session::get('id');
        $catatan_pribadi = catatan_pribadi::where('id_user', $id_user)->get();
        return view('/NotesMain', ['catatan_pribadi' => $catatan_pribadi]);
    }
}
