@extends('inventories.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Inventory</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('inventories.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('inventories.update',$inventory->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Obat:</strong>
                    <input type="text" name="nama_obat" value="{{ $inventory->nama_obat }}" class="form-control" placeholder="Nama Obat">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah Tersedia:</strong>
                    <input type="text" name="jumlah_tersedia" value="{{ $inventory->jumlah_tersedia }}" class="form-control" placeholder="Jumlah Tersedia">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Kadaluwarsa:</strong>
                    <input type="text" name="expired" value="{{ $inventory->expired }}" class="form-control" placeholder="Tanggal Kadaluwarsa">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Lokasi Penyimpanan:</strong>
                    <input type="text" name="lokasi_simpan" value="{{ $inventory->lokasi_simpan }}" class="form-control" placeholder="Lokasi Penyimpanan>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection