@extends('layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Nilai</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('nilaifariskas.index') }}"> Back</a>
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
  
    <form action="{{ route('nilaifariskas.update', $nilaifariska->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="row">
             <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                     <strong>Nama:</strong>
                     <select name="nama">
                         @foreach ($nama as $item)
                             <option value="{{ $item->id }}" 
                                 @if ($item->id == $nilaifariska->nama) selected @endif>
                                         {{ $item->nama}}
                             </option>
                         @endforeach
                     </select>
                 </div>                
             </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>MK:</strong>
                    <select name="mk">
                        @foreach ($mk as $item)
                            <option value="{{ $item->id }}" 
                                @if ($item->id == $nilaifariska->mk) selected @endif>
                                        {{ $item->nama_mk}}
                            </option>
                        @endforeach
                    </select>
                </div>                
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nilai:</strong>
                    <input type="number" name="nilai" value="{{ $nilaifariska->nilai }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection