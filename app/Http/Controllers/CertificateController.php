<?php

namespace Sivil\Http\Controllers;

use Illuminate\Http\Request;
use Sivil\Models\Certificate;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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

        $validator = Validator::make($request->all(), [
            'program_studi' => 'required',
            'nama_mahasiswa' => 'required|string',
            'nim' => 'required|string|unique:certificates',
            'no_ijazah' => 'required|string|unique:certificates',
            'tgl_lulus' => 'required|string'
        ], [
            'program_studi.required' => 'Alamak, pilih dulu lah bosque',
            'nama_mahasiswa.required' => 'Wajib diisi bosque',
            'nim.required' => 'Aah bosque ni ada-ada saja, isi dulu bosque',
            'nim.unique' => 'NIM sudah terpakai bosque',
            'no_ijazah.required' => 'Aah bosque suka becanda, isi dulu bosque',
            'no_ijazah.unique'  => 'Pake Nomor Ijazah lainnya bosque',
            'tgl_lulus.required' => 'Jangan dibiarkan kosong bosque'
        ]);

        if ( $validator->fails() ) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

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
        
        $validator = Validator::make($request->all(), [
            'program_studi'     => 'required',
            'nama_mahasiswa'    => 'required|string',
            'nim'               => ['required','string', Rule::unique('certificates')->ignore($id)],
            'no_ijazah'         => ['required', 'string', Rule::unique('certificates')->ignore($id)],
            'tgl_lulus'         => 'required|string',
        ], [
            'program_studi.required' => 'Alamak, pilih dulu lah bosque',
            'nama_mahasiswa.required' => 'Wajib diisi bosque',
            'nim.required' => 'Aah bosque ni ada-ada saja, isi dulu bosque',
            'nim.unique' => 'NIM sudah terpakai bosque',
            'no_ijazah.required' => 'Aah bosque suka becanda, isi dulu bosque',
            'no_ijazah.unique'  => 'Pake Nomor Ijazah lainnya bosque',
            'tgl_lulus.required' => 'Jangan dibiarkan kosong bosque'
        ]);

        if ( $validator->fails() ) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

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