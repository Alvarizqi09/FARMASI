@extends('stocks.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Stock</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('stocks.index') }}"> Back</a>
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
  
    <form action="{{ route('stocks.update',$stock->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Obat:</strong>
                    <input type="text" name="id_obat" value="{{ $stock->id_obat }}" class="form-control" placeholder="ID Obat">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Obat:</strong>
                    <input type="text" name="nama_obat" value="{{ $stock->nama_obat }}" class="form-control" placeholder="Nama Obat">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis Obat:</strong>
                    <input type="text" name="jenis_obat" value="{{ $stock->jenis_obat }}" class="form-control" placeholder="Jenis Obat">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Dosis:</strong>
                    <input type="text" name="dosis" value="{{ $stock->dosis }}" class="form-control" placeholder="Dosis">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Efek Samping:</strong>
                    <textarea class="form-control" style="height:150px" name="efek_samping" placeholder="Detail">{{ $stock->efek_samping }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Bentuk Obat:</strong>
                    <input type="text" name="bentuk_obat" value="{{ $stock->bentuk_obat }}" class="form-control" placeholder="Bentuk Obat">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kategori Resep:</strong>
                    <input type="text" name="kategori_resep" value="{{ $stock->kategori_resep }}" class="form-control" placeholder="Kategori Resep">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Stok Minimal:</strong>
                    <input type="text" name="stok_minimal" value="{{ $stock->stok_minimal }}" class="form-control" placeholder="Stok Minimal">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection