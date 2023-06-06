@extends('layout.main')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>UAS RPL</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('matkulfariskas.create') }}"> Create New MK</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>ID MK</th>
            <th>Nama MK</th>

            <th width="280px">Action</th>
        </tr>
        @foreach ($matkulfariskas as $row)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $row->idMK }}</td>
            <td>{{ $row->nama_mk }}</td>

            <td>
                <form action="{{ route('matkulfariskas.destroy',$row->id) }}" method="POST">
   
                    {{-- <a class="btn btn-info" href="{{ route('pasiens.show',$row->id) }}">Show</a> --}}
    
                    <a class="btn btn-primary" href="{{ route('matkulfariskas.edit',$row->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
      
@endsection