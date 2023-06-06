@extends('layout.main')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>UAS RPL</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('prodifariskas.create') }}"> Create New Prodi</a>
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
            <th>ID Prodi</th>
            <th>Nama Prodi</th>

            <th width="280px">Action</th>
        </tr>
        @foreach ($prodifariskas as $row)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $row->id_prodi }}</td>
            <td>{{ $row->nama_prodi }}</td>

            <td>
                <form action="{{ route('prodifariskas.destroy',$row->id) }}" method="POST">
   
                    {{-- <a class="btn btn-info" href="{{ route('pasiens.show',$row->id) }}">Show</a> --}}
    
                    <a class="btn btn-primary" href="{{ route('prodifariskas.edit',$row->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
      
@endsection