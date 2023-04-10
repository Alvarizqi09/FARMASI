@extends('supplier.layout')

  

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Add New Supplier</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('supplier.index') }}"> Back</a>

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

   

<form action="{{ route('supplier.store') }}" method="POST">

    @csrf
    
    <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-12">
    
            <div class="form-group">
    
                <strong>ID Manager:</strong>
    
                <input type="text" name="id_manager" class="form-control" placeholder="ID Manager">
    
            </div>
    
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            
            <div class="form-group">

                <strong>Nama:</strong>

                <input type="text" name="nama" class="form-control" placeholder="Nama">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Email:</strong>

                <input type="text" name="email" class="form-control" placeholder="Email">

            </div>

        </div>
        
        
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Alamat:</strong>

                <input type="text" name="alamat" class="form-control" placeholder="Alamat">

            </div>

        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Jenis Obat:</strong>

                <input type="text" name="jenis_obat" class="form-control" placeholder="Jenis Obat">

            </div>

        </div>
        
        
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Harga:</strong>

                <input type="text" name="harga" class="form-control" placeholder="Harga">

            </div>

        </div>
        <!-- <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Detail:</strong>

                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>

            </div>

        </div> -->

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>

   

</form>

@endsection