<?php

namespace Sivil\Http\Controllers;

use Illuminate\Http\Request;
use Sivil\Models\Certificate;

class CertificateController extends Controller
{
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
        // dd($c);
        $c->save();
        return redirect()->route('certificate.index')->with('success', 'Data Mahasiswa berhasil ditambahkan.');
    }

    public function show($id)
    {
        $c = Customer::findOrFail($id);
        return view('customer.show', compact('c'));
    }

    public function edit($id)
    {
        $c = Customer::find($id);
        return view('customer.edit', compact('c'));
    }

    public function update(Request $request, $id)
    {
        $c = Customer::find($id)->update($request->all());
        return redirect()->route('cust.index')->with('success', 'Data Customer berhasil diubah.');
    }

    public function destroy($id)
    {
        $c = Customer::findOrFail($id);
        $c->delete();
        return redirect()->route('cust.index');
    }
}