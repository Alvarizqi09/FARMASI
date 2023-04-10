@extends('inventories.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>Informasi Penyimpanan Obat</h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('inventories.create') }}"> Create New Inventory</a>
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
            <th>ID Obat</th>
            <th>Nama Obat</th>
            <th>Jumlah Tersedia</th>
            <th>Tanggal Kadaluwarsa</th>
            <th>Lokasi Penyimpanan</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($inventories as $inventory)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $inventory->id_obat }}</td>
            <td>{{ $inventory->nama_obat }}</td>
            <td>{{ $inventory->jumlah_tersedia }}</td>
            <td>{{ $inventory->expired }}</td>
            <td>{{ $inventory->lokasi_simpan }}</td>
            <td>
                <form action="{{ route('inventories.destroy',$inventory->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('inventories.show',$inventory->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('inventories.edit',$inventory->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $inventories->links() !!}
      
@endsection