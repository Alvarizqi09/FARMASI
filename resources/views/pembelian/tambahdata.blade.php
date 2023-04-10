<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tambah Data Pembelian</title>
  </head>
  <body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <h1 class='text-center mb-5 mt-5'>Tambah Data Pembelian</h1>
  <div class="container mb-5">
    <div class="row justify-content-center">
     <div class="col-8">
      <div class="card">
        <div class="card-body">
          <form action="/insertdata" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">ID Obat</label>
              <input type="integer" name="idobat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">ID Supplier</label>
              <input type="integer" name="idsupplier" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/pembelian" class="btn btn-danger">Kembali</a>
          </form>
        </div>
      </div>
     </div>
    </div>
  </div>
  </body>
</html>