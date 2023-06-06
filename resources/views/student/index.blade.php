@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data mahasiswa Alvarizqi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('student.create') }}"> Create New Mahasiswa</a>
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
            <th>NIM</th>
            <th>Nama</th>
            <th>jurusan</th>
            <th>No Telepon</th>
            <th>jeniskelamin</th>
            <th>email</th>
            <th>NIK</th>
            <th>alamat</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->NIM }}</td>
            <td>{{ $student->nama }}</td>
            <td>{{ $student->jurusan }}</td>
            <td>{{ $student->telepon }}</td>
            <td>{{ $student->jeniskelamin }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->NIK }}</td>
            <td>{{ $student->alamat }}</td>
            <td>
                <form action="{{ route('student.destroy',$student->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('student.show',$student->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('student.edit',$student->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $students->links() !!}
        
@endsection