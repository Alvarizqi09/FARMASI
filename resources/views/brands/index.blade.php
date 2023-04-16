@extends('layouts.main')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h1>Informasi Ketersediaan Obat</h1>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('brands.create') }}"> Buat Stok Baru</a>
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
        <th>Nama Supplier</th>
        <th>Alamat Email</th>
        <th>Alamat</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($brands as $brand)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $brand->nama_supplier }}</td>
        <td>{{ $brand->email }}</td>
        <td>{{ $brand->alamat }}</td>
        <td>
            <form action="{{ route('brands.destroy',$brand->id) }}" method="POST">

                <a class="btn btn-primary" href="{{ route('brands.edit',$brand->id) }}">Edit</a>

                @csrf
                @method('DELETE')
  
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $brands->links() !!}
@endsection