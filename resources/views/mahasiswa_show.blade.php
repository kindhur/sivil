@extends('layouts.template')
@section('judul', 'Hapus Data Mahasiswa')

@section('konten')
        
            <!-- start: page -->        
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                </div>
                <h2 class="panel-title">Anda yakin Menghapus Data ini ?</h2>
            </header>

            <div class="panel-body">
                
                <form class="form-horizontal form-bordered" method="POST" action="{{ route('certificate.destroy', $data->id) }}">
                    @csrf @method('DELETE')
                    <div class="col-offset-md-3 form-group">
                        <label class="col-md-3 control-label">Program Studi</label>
                        <div class="col-md-6">
                                <span class="form-control">@if ( $data->kodeprodi == '61201' ) S1 Manajemen @elseif ( $data->kodeprodi == '61101' ) S2 Manajemen @endif</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Nama Mahasiswa</label>
                        <div class="col-md-6">
                            <span class="form-control">{{ $data->nama_mahasiswa }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">NIM</label>
                        <div class="col-md-6">
                            <span class="form-control">{{ $data->nim }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">No Ijazah</label>
                        <div class="col-md-6">
                            <span class="form-control">{{ $data->no_ijazah }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Tanggal Lulus</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                    </span>
                                <span type="text" class="form-control">{{ date('m/d/Y', strtotime($data->tgl_lulus)) }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-9 col-sm-offset-3">
                            <button class="btn btn-primary" type="submit">Hapus</button>
                            <a href="{{ route('certificate.index') }}" class="btn btn-default">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </section>

            <!-- end: page -->
@endsection