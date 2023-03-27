@extends('products.layout')

 

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>SAFIRA HUSNUN NAZA</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Supplier</a>

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

            <th>Name</th>

            <th>Alamat</th>
            
            <th>Nomor Telepon</th>
            
            <th>Jenis Obat</th>
            
            <th>Harga</th>



            <th width="280px">Action</th>

        </tr>

        @foreach ($products as $product)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $product->name }}</td>
            
            <td>{{ $product->alamat }}</td>
            
            <td>{{ $product->nomor_telepon}}</td>
            <td>{{ $product->jenis_obat }}</td>
            <td>{{ $product->harga }}</td>
            
            <td>

                <form action="{{ route('products.destroy',$product->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>

    

                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>

   

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    {!! $products->links() !!}

      

@endsection