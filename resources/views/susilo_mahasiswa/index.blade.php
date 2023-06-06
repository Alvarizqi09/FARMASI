@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data Mahasiswa
                        <a href="{{ route('mahasiswa.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>IDMahasiswa</th>
                                        <th>Nama</th>
                                        <th>Jenis_Kelamin</th>
                                        <th>Prodi</th>
                                        <th>Agama</th>
                                        <th>NIK</th>
                                        <th>Telepon</th>
                                        <th>Alamat</th>
                                        <th>Tanggal_Lahir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($mahasiswa as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->IDMahasiswa }}</td>
                                            <td>{{ $data->Nama }}</td>
                                            <td>{{ $data->Jenis_Kelamin }}</td>
                                            <td>{{ $data->Prodi }}</td>
                                            <td>{{ $data->Agama }}</td>
                                            <td>{{ $data->NIK }}</td>
                                            <td>{{ $data->Telepon }}</td>
                                            <td>{{ $data->Alamat }}</td>
                                            <td>{{ date('d M Y', strtotime($data->Tanggal_Lahir)) }}</td>
                                            <td>
                                                <form action="{{ route('mahasiswa.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('mahasiswa.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                        Edit
                                                    </a> |
                                                    <a href="{{ route('mahasiswa.show', $data->id) }}"
                                                        class="btn btn-sm btn-outline-warning">
                                                        Show
                                                    </a> |
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('Apakah Anda Yakin?')">Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection