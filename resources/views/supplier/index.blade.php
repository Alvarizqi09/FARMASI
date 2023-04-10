@extends('supplier.layout')

 

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Informasi Supplier</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('supplier.create') }}"> Create New Supplier</a>

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

            <th>ID Manager</th>

            <th>Nama</th>
            
            <th>Email</th>

            <th>Alamat</th>
            
            
            <th>Obat Tersedia</th>
            
            <th>Harga</th>



            <th width="280px">Action</th>

        </tr>

        @foreach ($supplier as $suppliers)

        <tr>

            <td>{{ ++$i }}</td>

           <td>{{ $suppliers->id_manager }}</td>
            
            <td>{{ $suppliers->nama }}</td>
            
            <td>{{ $suppliers->email }}</td>
            
            <td>{{ $suppliers->alamat }}</td>
            
            
            <td>{{ $suppliers->obat_tersedia }}</td>
            <td>{{ $suppliers->harga }}</td>
            
            <td>

                <form action="{{ route('supplier.destroy',$suppliers->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('supplier.show',$suppliers->id) }}">Show</a>

    

                    <a class="btn btn-primary" href="{{ route('supplier.edit',$suppliers->id) }}">Edit</a>

   

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    {!! $supplier->links() !!}

      

@endsection