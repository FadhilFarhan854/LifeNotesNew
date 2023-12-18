<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\catatan_keuangan;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\isi_catatan_keuangan;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;


class CatatanKeuanganController extends Controller
{
    public function index()
    {
        $id_user = Session::get('id');

        $catatan_keuangan = DB::table('catatan_keuangan')
            ->leftJoin('isi_catatan_keuangan', 'catatan_keuangan.id_catatan', '=', 'isi_catatan_keuangan.id_catatan')
            ->select(
                'catatan_keuangan.id_catatan',
                'catatan_keuangan.judul',
                DB::raw('SUM(CASE WHEN isi_catatan_keuangan.keuangan LIKE "-%" THEN CAST(SUBSTRING(isi_catatan_keuangan.keuangan, 2) AS DECIMAL) ELSE 0 END) AS sum_with_minus'),
                DB::raw('SUM(CASE WHEN isi_catatan_keuangan.keuangan NOT LIKE "-%" THEN CAST(isi_catatan_keuangan.keuangan AS DECIMAL) ELSE 0 END) AS sum_without_minus'),
                DB::raw('SUM(isi_catatan_keuangan.keuangan) AS sum')
            )
            ->where('catatan_keuangan.id_user', $id_user)
            ->groupBy('catatan_keuangan.id_catatan', 'catatan_keuangan.judul')
            ->orderBy('catatan_keuangan.id_catatan', 'DESC')
            ->get();

        return view('/LaporanKeuangan', compact('catatan_keuangan'));
    }
    public function show($id_catatan)
    {
        $id_user = Session::get('id');

        $catatan_keuangan = DB::table('catatan_keuangan')
            ->leftJoin('isi_catatan_keuangan', 'catatan_keuangan.id_catatan', '=', 'isi_catatan_keuangan.id_catatan')
            ->select(
                'catatan_keuangan.id_catatan',
                'catatan_keuangan.judul',
                DB::raw('SUM(CASE WHEN isi_catatan_keuangan.keuangan LIKE "-%" THEN CAST(SUBSTRING(isi_catatan_keuangan.keuangan, 2) AS DECIMAL) ELSE 0 END) AS sum_with_minus'),
                DB::raw('SUM(CASE WHEN isi_catatan_keuangan.keuangan NOT LIKE "-%" THEN CAST(isi_catatan_keuangan.keuangan AS DECIMAL) ELSE 0 END) AS sum_without_minus'),
                DB::raw('SUM(isi_catatan_keuangan.keuangan) AS sum')
            )
            ->where('catatan_keuangan.id_user', $id_user)
            ->where('catatan_keuangan.id_catatan', $id_catatan)
            ->groupBy('catatan_keuangan.id_catatan', 'catatan_keuangan.judul')
            ->orderBy('catatan_keuangan.id_catatan', 'DESC')
            ->get();

        $isi_catatan_keuangan = isi_catatan_keuangan::leftJoin('catatan_keuangan', function ($join) use ($id_user) {
            $join->on('isi_catatan_keuangan.id_catatan', '=', 'catatan_keuangan.id_catatan')
                ->where('catatan_keuangan.id_user', '=', $id_user);
        })
            ->where('catatan_keuangan.id_user', $id_user)
            ->where('isi_catatan_keuangan.id_catatan', $id_catatan)
            ->orderBy('catatan_keuangan.id_catatan', 'DESC')
            ->get();

        return view('/dataKeuangan', compact('isi_catatan_keuangan', 'catatan_keuangan'));
    }
    public function search(Request $request)
    {
        $id_user = Session::get('id');
        $search = $request->search;
        $catatan_keuangan = DB::table('catatan_keuangan')
            ->leftJoin('isi_catatan_keuangan', 'catatan_keuangan.id_catatan', '=', 'isi_catatan_keuangan.id_catatan')
            ->select(
                'catatan_keuangan.id_catatan',
                'catatan_keuangan.judul',
                DB::raw('SUM(CASE WHEN isi_catatan_keuangan.keuangan LIKE "-%" THEN CAST(SUBSTRING(isi_catatan_keuangan.keuangan, 2) AS DECIMAL) ELSE 0 END) AS sum_with_minus'),
                DB::raw('SUM(CASE WHEN isi_catatan_keuangan.keuangan NOT LIKE "-%" THEN CAST(isi_catatan_keuangan.keuangan AS DECIMAL) ELSE 0 END) AS sum_without_minus'),
                DB::raw('SUM(isi_catatan_keuangan.keuangan) AS sum')
            )
            ->where('catatan_keuangan.id_user', $id_user)
            ->where('catatan_keuangan.judul', $search)
            ->groupBy('catatan_keuangan.id_catatan', 'catatan_keuangan.judul')
            ->orderBy('catatan_keuangan.id_catatan', 'DESC')
            ->get();

        return view('/LaporanKeuangan', ['catatan_keuangan' => $catatan_keuangan]);
    }
    public function create(Request $request)
    {
        $id_user = Session::get('id');
        catatan_keuangan::create([
            'id_user' => $id_user,
            'judul' => $request->judul,
        ]);
        return redirect('/LaporanKeuangan');
    }
    public function delete($id_catatan)
    {
        $catatanKeuangan = catatan_keuangan::find($id_catatan);
        $catatanKeuangan->delete();

        return redirect('/LaporanKeuangan');
    }
    public function edit(Request $request, $id_catatan)
    {
        $catatanKeuangan = catatan_keuangan::find($id_catatan);
        $catatanKeuangan->judul = $request->input('judul');
        $catatanKeuangan->save();

        return redirect('/dataKeuangan/' . $id_catatan);
    }
    public function editData(Request $request, $id_catatan)
    {
        if ($request->has('expense')) {
            $keuanganValue = $request->nominal * (-1);
        } else {
            $keuanganValue = $request->nominal;
        }
        $catatanKeuangan = isi_catatan_keuangan::find($id_catatan);
        $catatanKeuangan->deskripsi = $request->input('deskripsi');
        $catatanKeuangan->keuangan = $keuanganValue;
        $catatanKeuangan->save();

        return redirect('/dataKeuangan/' . $id_catatan);
    }
    public function createData(Request $request, $id_catatan)
    {
        if ($request->has('expense')) {
            $keuanganValue = $request->nominal * (-1);
        } else {
            $keuanganValue = $request->nominal;
        }
        $currentDate = Carbon::today();
        $formattedDate = $currentDate->format('Y-m-d');
        isi_catatan_keuangan::create([
            'id_catatan' => $id_catatan,
            'deskripsi' => $request->deskripsi,
            'keuangan' => $keuanganValue,
            'tanggal' => $formattedDate,
        ]);
        return redirect('/dataKeuangan/' . $id_catatan);
    }
    public function searchData(Request $request,$id_catatan)
    {
        $id_user = Session::get('id');

        $catatan_keuangan = DB::table('catatan_keuangan')
            ->leftJoin('isi_catatan_keuangan', 'catatan_keuangan.id_catatan', '=', 'isi_catatan_keuangan.id_catatan')
            ->select(
                'catatan_keuangan.id_catatan',
                'catatan_keuangan.judul',
                DB::raw('SUM(isi_catatan_keuangan.keuangan) AS sum')
            )
            ->where('catatan_keuangan.id_user', $id_user)
            ->groupBy('catatan_keuangan.id_catatan', 'catatan_keuangan.judul')
            ->orderBy('catatan_keuangan.id_catatan', 'DESC')
            ->get();

        $isi_catatan_keuangan = isi_catatan_keuangan::where('isi_catatan_keuangan.deskripsi', $request->search)
            ->where('isi_catatan_keuangan.id_catatan', $id_catatan)
            ->orderBy('isi_catatan_keuangan.deskripsi', 'DESC')
            ->get();

            return view('/dataKeuangan', compact('isi_catatan_keuangan', 'catatan_keuangan'));
    }
}
