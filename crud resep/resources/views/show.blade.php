@extends('layout.default')

@section('content')
    <section>
        <div class="containter mt-5">
            <h1>Edit Data Resep</h1>
            <div class="row">
                <div class="col-lg-8">
                <form action="{{url('/update/'.$data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">nama Pasien *</label>
                            <input type="text" name="nama_Pasien" class="form-control" placeholder="Alvarizqi" value="{{$data->nama_Pasien}}">
                        </div>
                        <div class="form-group">
                            <label for="">nama Dokter *</label>
                            <input type="text" name="nama_Dokter" class="form-control" placeholder="Dr.Susilo" value="{{$data->nama_Dokter}}">
                        </div>
                        <div class="form-group">
                            <label for="">nama Obat *</label>
                            <input type="text" name="nama_Obat" class="form-control" placeholder="Paratusin" value="{{$data->nama_Obat}}">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Pengambilan *</label>
                            <input type="date" name="Tanggal_pengambilan" class="form-control" placeholder="2-7-2022" value="{{$data->Tanggal_pengambilan}}">
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">Tambah data resep</button>
                        </div>
                        <div class="form-group mt-2">
                           <a href="{{url('/')}}"> 
                            << kembali ke halaman utama >> </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection