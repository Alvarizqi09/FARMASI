@extends('apoteker.layout')

  

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show apotekerr</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('apoteker.index') }}"> Back</a>

            </div>

        </div>

    </div>

   
        
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama Apoteker:</strong>

                {{ $apoteker->nama_apoteker }}

            </div>

        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Jam Kerja:</strong>

                {{ $apoteker->jam_kerja }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Email:</strong>

                {{ $apoteker->email }}

            </div>

        </div>


    </div>

@endsection