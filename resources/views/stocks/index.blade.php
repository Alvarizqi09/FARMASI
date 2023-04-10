@extends('stocks.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>Informasi Ketersediaan Obat</h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('stocks.create') }}"> Create New Stock</a>
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
            <th>Jenis Obat</th>
            <th>Dosis</th>
            <th>Efek Samping</th>
            <th>Bentuk Obat</th>
            <th>Kategori Resep</th>
            <th>Stok Minimal</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($stocks as $stock)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $stock->id_obat }}</td>
            <td>{{ $stock->nama_obat }}</td>
            <td>{{ $stock->jenis_obat }}</td>
            <td>{{ $stock->dosis }}</td>
            <td>{{ $stock->efek_samping }}</td>
            <td>{{ $stock->bentuk_obat }}</td>
            <td>{{ $stock->kategori_resep }}</td>
            <td>{{ $stock->stok_minimal }}</td>
            <td>
                <form action="{{ route('stocks.destroy',$stock->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('stocks.show',$stock->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('stocks.edit',$stock->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $stocks->links() !!}
      
@endsection