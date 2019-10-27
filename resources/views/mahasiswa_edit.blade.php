@extends('layouts.template')
@section('judul', 'Edit Mahasiswa')

@section('konten')
        
            <!-- start: page -->        
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                </div>
                <h2 class="panel-title">Edit Mahasiswa</h2>
            </header>

            <div class="panel-body">

                <form class="form-horizontal form-bordered" method="POST" action="{{ route('certificate.update', $data->id) }}">
                    @csrf @method('PUT') @method('PATCH')
                    <div class="col-offset-md-3 form-group">
                        <label class="col-md-3 control-label">Program Studi</label>
                        <div class="col-md-6">
                            <select name="program_studi" class="form-control">
                                <option value="61201" {{ ($data->kodeprodi == '61201') ? "selected" : "" }}>S1 Manajemen</option>
                                <option value="61101" {{ ($data->kodeprodi == '61101') ? "selected" : "" }}>S2 Manajemen</option>
                            </select>
                            @error('program_studi')
                            <label for="fullname" class="error">{{ $message }}</label>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Nama Mahasiswa</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="nama_mahasiswa" value="{{ $data->nama_mahasiswa }}">
                            @error('nama_mahasiswa')
                            <label for="fullname" class="error">{{ $message }}</label>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">NIM</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="nim" value="{{ $data->nim }}">
                            @error('nim')
                            <label for="fullname" class="error">{{ $message }}</label>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">No Ijazah</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="no_ijazah" value="{{ $data->no_ijazah }}">
                            @error('no_ijazah')
                            <label for="fullname" class="error">{{ $message }}</label>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Tanggal Lulus</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                    </span>
                                <input type="text" data-plugin-datepicker class="form-control" name="tgl_lulus" value="{{ date('m/d/Y', strtotime($data->tgl_lulus)) }}">
                            </div>
                            @error('tgl_lulus')
                            <label for="fullname" class="error">{{ $message }}</label>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-9 col-sm-offset-3">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                            <a href="{{ route('certificate.index') }}" class="btn btn-default">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </section>

            <!-- end: page -->
@endsection