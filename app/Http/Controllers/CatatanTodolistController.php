<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catatan_Todolist;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CatatanTodolistController extends Controller
{
    public function index()
    {
        $id_user = Session::get('id');
        $catatan_todolist = Catatan_Todolist::where('id_user', $id_user)
            ->orderBy('id_catatan', 'DESC')
            ->get();

        return view('/Todolist', compact('catatan_todolist'));
    }

    public function create(Request $request)
    {
        $id_user = Session::get('id');
        Catatan_Todolist::create([
            'id_user' => $id_user,
            'todolist' => $request->input('todolist'),
            'status' => 0,
        ]);
        return redirect('/Todolist');
    }

    public function edit(Request $request, $id_catatan)
    {
        $catatan_todolist = Catatan_Todolist::find($id_catatan);
        if ($request->has("delete")) {
            $catatan_todolist->delete();
        } else {
            $catatan_todolist->todolist = $request->input('todolist');
            $catatan_todolist->save();
        }
        return redirect('/Todolist');
    }

    public function updateStatus(Request $request, $id)
    {
        $catatan_todolist = Catatan_Todolist::find($id);

        if (!$catatan_todolist) {
            return response()->json(['error' => 'Record not found.'], 404);
        }

        $catatan_todolist->status = $request->input('status');
        $catatan_todolist->save();

        return redirect('/Todolist');
    }
    public function search(Request $request)
    {
        $id_user = Session::get('id');
        $catatan_todolist = Catatan_Todolist::where('todolist', 'like', '%' . $request->search . '%')->where('id_user', $id_user)->get();
        return view('/Todolist', compact('catatan_todolist'));
    }
}
