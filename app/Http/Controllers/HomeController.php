<?php

namespace Sivil\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Sivil\Models\Certificate;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $angka = [];

        $angka[0] = rand(1, 50);

        $angka[1] = rand(1, 50);

        if ( $request == null or collect($request)->count() == 0 ) {
            
            $request->session()->forget(['gagal', 'sukses']);
            
            return view('depan', compact('angka'));

        } elseif ( ( $request !== null or collect($request)->count() !== 0 ) && $request->pengaman !== $request->kunci ) {
            
            Session::flash('salah', '');

            return view('depan', compact('angka'));
        
        } else {

            $query = Certificate::where(
                [
                    ['kodeprodi', $request->kode_prodi],
                    ['no_ijazah', $request->no_ijazah]
                ])
                ->get();
            
            if ( $query->count() == 1 && $request->pengaman == $request->kunci ) {
                $data = $query->first();

                $request->session()->forget('gagal');
                
                Session::flash('sukses', '');

                return view('hasil', compact('data'));

            } elseif ( $query->count() == 0 && $request->pengaman == $request->kunci ) {
                $request->session()->forget('sukses');
                
                Session::flash('gagal', '');

                return view('depan', compact('angka'));
            }
        }

    }

}
