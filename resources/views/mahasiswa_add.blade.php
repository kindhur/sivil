@extends('layouts.template')
@section('judul', 'Tambah Mahasiswa')

@section('konten')
        
            <!-- start: page -->        
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    {{-- <a href="#" class="fa fa-times"></a> --}}
                </div>
                <h2 class="panel-title">Tambah Mahasiswa</h2>
            </header>

            <div class="panel-body">

                <form class="form-horizontal form-bordered" method="POST" action="{{ route('certificate.store') }}">
                    @csrf
                    <div class="col-offset-md-3 form-group">
                        <label class="col-md-3 control-label">Program Studi</label>
                        <div class="col-md-6">
                            <select name="program_studi" class="form-control">
                                <option value="61201">S1 Manajemen</option>
                                <option value="61101">S2 Manajemen</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Nama Mahasiswa</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="nama_mahasiswa">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">NIM</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="nim">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">No Ijazah</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="no_ijazah">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Tanggal Lulus</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                    </span>
                                <input type="text" data-plugin-datepicker class="form-control" name="tgl_lulus">
                            </div>
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

@push('data-table')
<script type="text/javascript">

    $('.date').datepicker({  

       format: 'mm-dd-yyyy'

     });  

</script>
@endpush