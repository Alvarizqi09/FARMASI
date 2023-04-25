@extends('layouts.main')

@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table table-stripped table-borderes table-sm" id="tabel" style="width: 100%">
                    <thead>
                        <tr class="text-center">
                            <th>Nama Obat</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Stock</th>
                            <th>Tanggal Masuk</th>
                            <th>Kadaluwarsa</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    {{-- button modal --}}

    <button type="button" class="btn btn-info" id="btn-tambah" data-toggle="modal" data-target="#modal-info">
        Tambah
    </button>

    {{-- modal --}}
    <div class="modal fade" id="modal-info">
        <div class="modal-dialog">
          <div class="modal-content bg-info">
            <div class="modal-header">
              <h4 class="modal-title">Data Obat</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              {{-- isian --}}
              <form action="/stocks.store" method="POST" id="forms">
                @csrf
                {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
                {{-- @method('POST') --}}
                <div class="form-group">
                    <label class="mr-sm-2" for="exampleInputEmail1">Nama Obat</label>
                    <select class="custom-select mr-sm-2 js-example-basic-single form-control form-control" name="obat" id="obat">
                        <option value="">Pilih Obat</option>
                        @foreach ($obat as $item)
                            <option value="{{ $item->id }}">{{ $item->nama_obat }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    JUMLAH STOK
                    <hr style="border: 1px solid red">
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label class="mr-sm-2" for="exampleInputEmail1">Stok Awal</label>
                        <input type="text" class="form-control" readonly autocomplete="off" value="0" 
                            id="stockLama" name="stockLama" class="form-control">
                        <input type="text" class="form-control" hidden autocomplete="off" id="id" name="id"
                            hidden class="form-control">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Stok Masuk</label>
                        <input type="text" class="form-control" autocomplete="off" 
                            id="masuk" name="masuk" value="0" class="form-control">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Stok Keluar</label>
                        <input type="text" class="form-control" autocomplete="off" 
                            id="keluar" name="keluar" value="0" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Stok Akhir</label>
                    <input type="text" class="form-control" readonly autocomplete="off" 
                        id="stock" name="stock" class="form-control">
                </div>
                <div>
                    STOK OBAT
                    <hr style="border: 1px solid red">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Harga Beli</label>
                    <input type="text" aria-label="telp" autocomplete="off" 
                        id="beli" name="beli" maxlength="12" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Harga Jual</label>
                    <input type="text" aria-label="telp" autocomplete="off" 
                        id="jual" name="jual" maxlength="12" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Masuk</label>
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' name="tanggal_masuk" id="tanggal_masuk" autocomplete="off" class="form-control" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Kadaluwarsa</label>
                    <div class='input-group date' id='datetimepicker2'>
                        <input type='text' name="kadaluwarsa" id="kadaluwarsa" autocomplete="off" class="form-control" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <input type="text" id="keterangan" name="keterangan" 
                    class="form-control" placeholder="Kurang, Lebih, Rusak">
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" name="batal" id="btn-tutup" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                <button type="submit" id="simpan" class="btn btn-outline-light">Save</button>
            </div>
        </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

      

    @stack('js')
    <script src={{ asset("plugins/datatables/jquery.dataTables.js") }}></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
    <script src=""></script>
    <script>

        $(document).ready(function () {
            loadData()
        })

        function loadData() {
            $('#tabel').DataTable({
                serverside: true,
                processing: true,
                ajax: {
                    url : "{{ route('stocks.index') }}"
                }, 
                columns: [
                    // {
                    //     data: null,
                    //     "sortable": false,
                    //     render: function (data, type, row, meta) {
                    //         return meta.row + meta.settings._iDisplayStart + 1;
                    //     }
                    // },
                    { data: 'namaObat', name: 'namaObat' },
                    { data: 'beli', name: 'beli' },
                    { data: 'jual', name: 'jual' },
                    { data: 'stock', name: 'stock' },
                    { data: 'tanggal_masuk', name: 'tanggal_masuk' },
                    { data: 'kadaluwarsa', name: 'kadaluwarsa' },
                    { data: 'keterangan', name: 'keterangan' },
                    { data: 'action', name: 'action', orderable: false },

                ]
            })
            
        }

        $(document).on('submit', 'form', function (event) {
            event.preventDefault();
            $.ajax({
                url : $(this).attr('action'),
                type : $(this).attr('method'),
                typeData : "JSON",
                data : new FormData(this),
                processData : false,
                contentType : false,
                success : function (res) {
                    console.log(res);
                    $('#btn-tutup').click()
                    $('#tabel').DataTable().ajax.reload()
                    $('#forms')[0].reset();
                    toastr.success(res.text, 'Sukses')
                },
                error : function (xhr) {
                    toastr.error(xhr.responseJSON.text, 'Gagal!')
                }
            })
        })

        // function number(evt) {
        //     var charCode = (evt.which) ? evt.which : event.keyCode
        //     if (charCode > 31 && (charCode < 48 || charCode > 57))
        //         return false;
        //     return true;
        // }

        $(document).on('change', '#obat', function () {
            let id = $(this).val()

            // $.ajaxSetup({
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //     }
            // });
            // var token = "{{csrf_token()}}"

            $.ajax({
                url : "{{ route('getObat') }}",
                type : "post",
                data : {
                    id : id,
                    _token : "{{ csrf_token() }}"
                }, success : function (res) {
                    $('#stockLama').val(res.data.stock)
                    console.log(res);
                }, error : function (xhr) {
                    console.error(xhr);
                }
            })
        })

        $(document).on('blur', '#masuk', function () {
            let awal = parseInt($('#stockLama').val())
            let masuk = parseInt($('#masuk').val())
            let keluar = parseInt($('#keluar').val())
            let akhir = (awal + masuk) - keluar
            $('#stock').val(akhir)
        })

        $(document).on('blur', '#keluar', function () {
            let awal = parseInt($('#stockLama').val())
            let masuk = parseInt($('#masuk').val())
            let keluar = parseInt($('#keluar').val())
            let akhir = (awal + masuk) - keluar
            $('#stock').val(akhir)
        })

        // edit
        $(document).on('click', '.edit', function () {
            $('#forms').attr('action', "{{ route('stock.updates') }}")
            $('#btn-tambah').click()
            let id = $(this).attr('id')

            // $.ajaxSetup({
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //     }
            // });
            // var token = "{{csrf_token()}}"
            
            $.ajax({
                url : "{{ route('stock.edits') }}",
                type : 'post',
                data : {
                    id : id,
                    _token : "{{ csrf_token() }}"
                }, 
                success : function (res) {
                    console.log(res)
                    let newOption = new Option(res.namaObat, res.idObat, true, true)
                        $('#id').val(res.id)
                        $('#obat').append(newOption).trigger('change')
                        // $('#obat').prop('disabled', true)
                        $('#beli').val(res.beli)
                        $('#jual').val(res.jual)
                        $('#stockLama').val(res.stock)
                        $('#tanggal_masuk').val(res.tanggal_masuk)
                        $('#kadaluwarsa').val(res.kadaluwarsa)
                        $('#keterangan').val(res.keterangan)
                }, 
                error : function (xhr) {
                    console.log(xhr)
                }
            })
        })

        $(document).on('click', '.hapus', function () {
        let id = $(this).attr('id')
        Swal.fire({
            title: 'Apakah kamu yakin?',
            text: "Kamu tidak bisa mengembalikannya lagi nanti!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url : "{{ route('stock.hapus') }}",
                        type : 'post',
                        data : {
                            id : id,
                            _token : "{{ csrf_token() }}"
                        },
                        success: function (res, status) {
                            if (status = '200') {
                                setTimeout(() => {
                                    Swal.fire({
                                        position: 'center-center',
                                        icon: 'success',
                                        title: 'Data berhasil dihapus',
                                        showConfirmButton: false,
                                        timer: 1500
                                        }).then((res) => {
                                            $('#tabel').DataTable().ajax.reload()
                                        })
                                });
                            }
                        },
                        error: function (xhr) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Gagal menghapus!',
                            })
                        }
                    })
                }
            })
    })
        

            
    </script>

@endsection