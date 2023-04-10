@extends('supplier.layout')

  

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show Supplier</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('supplier.index') }}"> Back</a>

            </div>

        </div>

    </div>

   

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>ID Manager:</strong>

                {{ $supplier->id_manager }}

            </div>

        </div>
        
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama:</strong>

                {{ $supplier->nama }}

            </div>

        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Email:</strong>

                {{ $supplier->email }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Alamat:</strong>

                {{ $supplier->alamat }}

            </div>

        </div>
      
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Obat Tersedia:</strong>

                {{ $supplier->obat_tersedia}}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Harga:</strong>

                {{ $supplier->harga }}

            </div>

        </div>

    </div>

@endsection