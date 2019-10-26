@extends('layouts.template')
@section('judul', 'Daftar Mahasiswa Lulus')

@section('konten')
        
            <!-- start: page -->      
        @if (session('success'))
        <section class="panel">
                <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        {{ session('success') }}
                </div>
        </section>
        @endif
        
        <section class="panel">
            <header class="panel-heading">
                    <h2 class="panel-title">Daftar Mahasiswa Lulus Abal-Abal</h2>
                    <div class="panel-actions">
                        <a href="{{ route('certificate.create') }}"><button class="btn btn-primary" type="submit">Tambah</button></a>
                        <a href="#" class="fa fa-caret-down"></a>
                    </div>
                </header>
    
                <div class="panel-body">
                    <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="{{ asset('css/copy_csv_xls_pdf.swf') }}">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Mahasiswa</th>
                                <th>NIM</th>
                                <th>Program Studi</th>
                                <th>No Ijazah</th>
                                <th>Tgl Lulus</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($data as $mahasiswa)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $mahasiswa->nama_mahasiswa }}</td>
                                <td>{{ $mahasiswa->nim }}</td>
                                <td>{{ $mahasiswa->program_studi }}</td>
                                <td>{{ $mahasiswa->no_ijazah }}</td>
                                <td>{{ date('d-m-Y', strtotime($mahasiswa->tgl_lulus)) }}</td>
                                <td>
                                    <a href="{{ route('certificate.edit', $mahasiswa->id)}}"><i class="fa fa-pencil"></i> Edit </a>
                                    <span>&nbsp;</span>
                                    <a href="{{ route('certificate.show', $mahasiswa->id)}}"><i class="fa fa-trash-o"></i> Hapus </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </section>
            <!-- end: page -->
@endsection

@push('data-table')
    <script src="{{ asset('js/examples.datatables.default.js') }}"></script>
    <script src="{{ asset('js/examples.datatables.row.with.details.js') }}"></script>
    <script src="{{ asset('js/examples.datatables.tabletools.js') }}"></script>
@endpush