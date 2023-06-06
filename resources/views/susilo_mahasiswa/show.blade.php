@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Mahasiswa
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">IDMahasiswa</label>
                            <input type="text" class="form-control " name="IDMahasiswa" value="{{ $mahasiswa->IDMahasiswa }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control " name="Nama" value="{{ $mahasiswa->Nama }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis_Kelamin</label>
                            <input type="text" class="form-control " name="Jenis_Kelamin" value="{{ $mahasiswa->Jenis_Kelamin }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Prodi</label>
                            <input type="text" class="form-control " name="Prodi" value="{{ $mahasiswa->Prodi }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Agama</label>
                            <input type="text" class="form-control " name="Agama" value="{{ $mahasiswa->Agama }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">NIK</label>
                            <input type="text" class="form-control " name="NIK" value="{{ $mahasiswa->NIK }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Telepon</label>
                            <input type="text" class="form-control " name="Telepon" value="{{ $mahasiswa->Telepon }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea class="form-control" name="alamat" readonly>{{ $mahasiswa->alamat }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal_Lahir</label>
                            <input type="text" class="form-control " name="Tanggal_Lahir" value="{{ $mahasiswa->Tanggal_Lahir }}" readonly>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('mahasiswa.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection