@extends('products.layout')

   

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit Product</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>

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

  

    <form action="{{ route('products.update',$product->id) }}" method="POST">

        @csrf

        @method('PUT')

   

         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Name:</strong>

                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Alamat:</strong>

                    <input type="text" name="alamat" value="{{ $product->alamat }}" class="form-control" placeholder="Alamat">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Nomor Telepon:</strong>

                    <input type="text" name="nomor_telepon" value="{{ $product->nomor_telepon }}" class="form-control" placeholder="Nomor Telepon">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Jenis Obat:</strong>

                    <input type="text" name="jenis_obat" value="{{ $product->jenis_obat }}" class="form-control" placeholder="Jenis Obat">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Harga:</strong>

                    <input type="text" name="harga" value="{{ $product->harga }}" class="form-control" placeholder="Harga">

                </div>

            </div>

            <!-- <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Detail:</strong>

                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $product->detail }}</textarea>

                </div>

            </div> -->

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

              <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>

   

    </form>

@endsection