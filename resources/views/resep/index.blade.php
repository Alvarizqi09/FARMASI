@extends('resep.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>resep</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('resep.create') }}"> Buat rekap resep baru</a>
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
            <th>ID Apoteker</th>
            <th>Nomor Resep</th>
            <th>Nama Pasien</th>
            <th>Nomor RM</th>
            <th>Nama Dokter</th>
            <th>Nama obat</th>
            <th>Dosis</th>
            <th>Tanggal resep</th>
        </tr>
        @foreach ($reseps as $resep)
        <tr>
            <td>{{ $resep->ID_Apoteker }}</td>
            <td>{{ $resep->No_Resep }}</td>
            <td>{{ $resep->Nama_Pasien }}</td>
            <td>{{ $resep->No_RM }}</td>
            <td>{{ $resep->Nama_Dokter }}</td>
            <td>{{ $resep->Nama_Obat }}</td>
            <td>{{ $resep->Nama_Dosis }}</td>
            <td>{{ $resep->tanggal_resep }}</td>
            <td>
                <form action="{{ route('resep.destroy',$resep->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('resep.show',$resep->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('resep.edit',$resep->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $reseps->links() !!}
        
@endsection