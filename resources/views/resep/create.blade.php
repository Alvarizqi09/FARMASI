@extends('resep.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>tambahkan rekap resep</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('resep.index') }}"> Back</a>
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
     
<form action="{{ route('resep.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Apoteker:</strong>
                <input type="integer" name="ID_Apoteker" class="form-control" placeholder="ID Apoteker">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nomor Resep:</strong>
                <input type="integer" name="No_Resep" class="form-control" placeholder="No Resep">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Pasien:</strong>
                <input type="string" name="Nama_Pasien" class="form-control" placeholder="Nama Pasien">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nomor RM:</strong>
                <input type="integer" name="No_RM" class="form-control" placeholder="Nomor RM">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Dokter:</strong>
                <input type="string" name="Nama_Dokter" class="form-control" placeholder="Nama Dokter">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Obat:</strong>
                <input type="string" name="Nama_Obat" class="form-control" placeholder="Nama Obat">
            </div>
        </div>  
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Dosis:</strong>
                <input type="string" name="Nama_Dosis" class="form-control" placeholder="Dosis">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Resep:</strong>
                <input type="date" name="tanggal_resep" class="form-control" placeholder="Tanggal Resep">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
     
</form>
@endsection