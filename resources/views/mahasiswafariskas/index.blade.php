@extends('layout.main')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>UAS RPL</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('mahasiswafariskas.create') }}"> Create New Mahasiswa</a>
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
            <th>NIM</th>
            <th>Nama</th>
            <th>NIK</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Email</th>
            <th>Prodi</th>

            <th width="280px">Action</th>
        </tr>
        @foreach ($mahasiswafariskas as $row)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $row->nim }}</td>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->nik }}</td>
            <td>{{ $row->jk }}</td>
            <td>{{ $row->agama }}</td>
            <td>{{ $row->alamat }}</td>
            <td>{{ $row->telp }}</td>
            <td>{{ $row->email }}</td>
            <td>
                @foreach ($prodi as $item)
                        @if ($item->id === $row->prodi)
                            {{ $item->nama_prodi }}
                        @endif
                @endforeach
            </td>


            <td>
                <form action="{{ route('mahasiswafariskas.destroy',$row->id) }}" method="POST">
   
                    {{-- <a class="btn btn-info" href="{{ route('pasiens.show',$row->id) }}">Show</a> --}}
    
                    <a class="btn btn-primary" href="{{ route('mahasiswafariskas.edit',$row->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
      
@endsection