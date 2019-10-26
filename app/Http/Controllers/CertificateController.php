<?php

namespace Sivil\Http\Controllers;

use Illuminate\Http\Request;
use Sivil\Models\Certificate;
use Illuminate\Database\Eloquent\SoftDeletes;

class CertificateController extends Controller
{
    use SoftDeletes;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $query = Certificate::all();

        $data = $query;

        return view('/beranda', compact('data'));
    }

    public function create()
    {
        return view('mahasiswa_add');
    }

    public function store(Request $request)
    {
        $c = new Certificate;
        $c->kode_pt = '073075';
        $c->nama_pt = 'Sekolah Tinggi Ilmu Ekonomi IBMT';
        $c->nama_mahasiswa = $request->nama_mahasiswa;
        if ( $request->program_studi == '61201' ) {
            $c->kodeprodi = $request->program_studi;
            $c->program_studi = 'S1 Manajemen';
        } elseif ($request->program_studi == '61101' ) {
            $c->kodeprodi = $request->program_studi;
            $c->program_studi = 'S2 Manajemen';
        }
        $c->nim = $request->nim;
        $c->no_ijazah = $request->no_ijazah;
        $c->tgl_lulus = date('Y-m-d', strtotime($request->tgl_lulus));
        $c->save();
        return redirect()->route('certificate.index')->with('success', 'Data Mahasiswa berhasil ditambahkan.');
    }

    public function show($id)
    {
        $data = Certificate::findOrFail($id);
        return view('mahasiswa_show', compact('data'));
    }

    public function edit($id)
    {
        $data = Certificate::find($id);
        return view('mahasiswa_edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $c = Certificate::find($id);

        $c->kode_pt = '073075';
        $c->nama_pt = 'Sekolah Tinggi Ilmu Ekonomi IBMT';
        $c->nama_mahasiswa = $request->nama_mahasiswa;
        if ( $request->program_studi == '61201' ) {
            $c->kodeprodi = $request->program_studi;
            $c->program_studi = 'S1 Manajemen';
        } elseif ($request->program_studi == '61101' ) {
            $c->kodeprodi = $request->program_studi;
            $c->program_studi = 'S2 Manajemen';
        }
        $c->nim = $request->nim;
        $c->no_ijazah = $request->no_ijazah;
        $c->tgl_lulus = date('Y-m-d', strtotime($request->tgl_lulus));
        $c->update();
        return redirect()->route('certificate.index')->with('success', 'Data Mahasiswa berhasil diubah.');
    }

    public function destroy($id)
    {
        $c = Certificate::findOrFail($id);
        $c->delete();
        return redirect()->route('certificate.index')->with('success', 'Data Mahasiswa berhasil dihapus.');
    }
}