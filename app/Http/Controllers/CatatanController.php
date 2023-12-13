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
    public function search(Request $request)
    {
        $id_user = Session::get('id');
        $search = $request->search;
        $catatan_pribadi = catatan_pribadi::where('judul', $search)->where('id_user', $id_user)->get();
        return view('/NotesMain', ['catatan_pribadi' => $catatan_pribadi]);
    }
    public function create()
    {
        $id_user = Session::get('id');
        $catatan_pribadi = catatan_pribadi::where('id_user', $id_user)->get();
        return view('/NotesMain', ['catatan_pribadi' => $catatan_pribadi]);
    }
    public function delete($id)
    {
        $catatan = catatan_pribadi::find($id);
        if ($catatan) {
            $catatan->delete();
            return redirect('/NotesMain');
        }
    }
   

    public function update(Request $request, $id){
    
    // Validate the request data
    $request->validate([
        'judul' => 'required',
        'deskripsi' => 'required',
        // Add other validation rules as needed
    ]);

    // Find the record in the database
    $catatan = catatan_pribadi::find($id);

    // Check if the record exists
    if (!$catatan) {
        return response()->json(['error' => 'Record not found'], 404);
    }

    // Update the record with the new data
    $catatan->judul = $request->input('judul');
    $catatan->deskripsi = $request->input('deskripsi');
    // Add other fields as needed

    // Save the changes
    $catatan->save();

    return response()->json(['message' => 'Record updated successfully']);
    }
}
