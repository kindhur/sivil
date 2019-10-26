<?php

namespace Sivil\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Sivil\Models\Certificate;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if ( $request == null or collect($request)->count() == 0 ) {
            
            $request->session()->forget(['gagal', 'sukses']);
            
            return view('depan');

        } else {

            $query = Certificate::where(
                [
                    ['kodeprodi', $request->kode_prodi],
                    ['no_ijazah', $request->no_ijazah]
                ])
                ->get();
            
            if ( $query->count() == 1 ) {
                $data = $query->first();

                $request->session()->forget('gagal');
                
                Session::flash('sukses', '');

                return view('hasil', compact('data'));

            } elseif ( $query->count() == 0 ) {
                $request->session()->forget('sukses');
                
                Session::flash('gagal', '');

                return view('depan');
            }
        }

    }

}
