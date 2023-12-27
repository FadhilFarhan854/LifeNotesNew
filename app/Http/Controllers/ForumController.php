<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\Likes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ForumController extends Controller
{
    public function indexUser()
    {
        $id_user = Session::get('id');
        $forums = Forum::select('saluran.*', 'username', DB::raw('SUM(IF(likes.id_user = '. $id_user. ', 1,0)) AS is_liked'), 'likes.id_user', DB::raw('(SELECT COUNT(likes.id_user) FROM likes WHERE saluran.id_saluran = likes.id_saluran) as likes'))
            ->leftJoin('admin', 'saluran.id_admin', '=', 'admin.id_admin')
            ->leftJoin('likes', 'saluran.id_saluran', '=', 'likes.id_saluran')
            ->groupBy('saluran.id_saluran')
            ->orderBy('id_saluran', 'DESC')
            ->get();

        return view('ForumUser', compact('forums'));
    }
    public function search(Request $request)
    {
        $forums = Forum::where('judul', 'like', '%' . $request->search . '%')
            ->orderBy('id_saluran', 'DESC')
            ->leftJoin('admin', 'saluran.id_admin', '=', 'admin.id_admin')
            ->select('saluran.*', 'username')
            ->get();
        return view('ForumUser', compact('forums'));
    }

    public function likes($id_saluran)
    {
        $existsInLikes = Likes::where('id_saluran', $id_saluran)->where('id_user', Session::get('id'))->exists();
        if (!$existsInLikes) {
            Likes::create([
                'id_saluran' => $id_saluran,
                'id_user' => Session::get('id'),
            ]);
        } else {
            Likes::where('id_saluran', $id_saluran)
                ->where('id_user', Session::get('id'))
                ->delete();
        }
        return redirect('Forum');
    }

    //BATAS USER DAN ADMIN

    public function indexAdmin()
    {
        $forums = Forum::orderBy('id_saluran', 'DESC')
            ->leftJoin('admin', 'saluran.id_admin', '=', 'admin.id_admin')
            ->select('saluran.*', 'username', DB::raw('(SELECT COUNT(id_user) FROM likes WHERE likes.id_saluran = saluran.id_saluran) as likes'))
            ->where('saluran.id_admin', Session::get('id'))
            ->get();

        return view('ForumAdmin', compact('forums'));
    }
    public function create(Request $request)
    {
        Forum::create([
            'id_admin' => Session::get('id'),
            'judul' => $request->input('judul'),
            'deskripsi' => $request->input('deskripsi'),
            'timestamp' => now(),
        ]);
        return redirect('/ForumAdmin');
    }
    public function edit(Request $request, $forum)
    {
        $forum = Forum::find($forum);
        $forum->judul = $request->input('judul');
        $forum->deskripsi = $request->input('deskripsi');
        $forum->save();
        return redirect('/ForumAdmin');
    }

    public function delete($id_forum)
    {
        $forum = Forum::find($id_forum);
        $forum->delete();
        return redirect('/ForumAdmin');
    }
    public function searchAdmin(Request $request){
        $forums = Forum::where('judul', 'like', '%' . $request->search . '%')
            ->orderBy('id_saluran', 'DESC')
            ->leftJoin('admin', 'saluran.id_admin', '=', 'admin.id_admin')
            ->select('saluran.*', 'username')
            ->where('saluran.id_admin', Session::get('id'))
            ->get();
        return view('ForumAdmin', compact('forums'));
    }
}
