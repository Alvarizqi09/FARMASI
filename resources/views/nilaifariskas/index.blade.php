@extends('layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>UAS RPL</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('nilaifariskas.create') }}"> Create New Prodi</a>
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
            <th>Nama</th>
            <th>Matkul</th>
            <th>Nilai</th>


            <th width="280px">Action</th>
        </tr>
        @foreach ($nilaifariskas as $row)
        <tr>
            <td>{{ ++$i }}</td>
            <td>
                @foreach ($nama as $item)
                        @if ($item->id === $row->nama)
                            {{ $item->nama }}
                        @endif
                @endforeach
            </td>
            <td>
                @foreach ($mk as $item)
                        @if ($item->id === $row->mk)
                            {{ $item->nama_mk }}
                        @endif
                @endforeach
            </td>
            <td>{{ $row->nilai }}</td>


            <td>
                <form action="{{ route('nilaifariskas.destroy',$row->id) }}" method="POST">
   
                    {{-- <a class="btn btn-info" href="{{ route('pasiens.show',$row->id) }}">Show</a> --}}
    
                    <a class="btn btn-primary" href="{{ route('nilaifariskas.edit',$row->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
      
@endsection