@extends('apoteker.layout')

   

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit Supplier</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('apoteker.index') }}"> Back</a>

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

  

    <form action="{{ route('apoteker.update', $apoteker->id) }}" method="POST">

        @csrf

        @method('PUT')

        <div class="row">


            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Nama Apoteker:</strong>

                    <input type="text" name="nama" value="{{ $apoteker->nama_apoteker }}" class="form-control" placeholder="Nama Apoteker">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Jam Kerja:</strong>

                    <input type="text" name="jam_kerja" value="{{ $apoteker->jam_kerja }}" class="form-control" placeholder="Jam Kerja">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Email:</strong>

                    <input type="text" name="email" value="{{ $apoteker->email }}" class="form-control" placeholder="Email">

                </div>

            </div>

          

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

              <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>

   

    </form>

@endsection