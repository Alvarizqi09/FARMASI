@extends('layout.default')

@section('content')
<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
              <h1>Tabel rekap resep</h1>
              <a href="{{url('create')}}" class="btn btn-primary">+ Tambah Resep</a>
            </div>
            <div class="col-lg-8 mt-5">
              <table class="table-bordered">
                <tr>
                    <th>nama Pasien</th>
                    <th>nama Dokter</th>
                    <th>nama Obat</th>
                    <th>Tanggal pengambilan</th>
                    <th>Action</th>
                </tr>
                @foreach($data as $dataresep)
                <tr>
                    <td>{{$dataresep ->nama_Pasien}}</td>
                    <td>{{$dataresep ->nama_Dokter}}</td>
                    <td>{{$dataresep ->nama_Obat}}</td>
                    <td>{{$dataresep ->Tanggal_pengambilan}}</td>
                    <td>
                        <a href="{{url('/show/'.$dataresep->id)}}" class="btn btn-warning">edit</a>
                        <a href="{{url('/destroy/'.$dataresep->id)}}" class="btn btn-danger">delete</a>
                    </td>
                </tr>
                @endforeach
              </table>
            </div>
        </div>
    </div>
</section>
@endsection