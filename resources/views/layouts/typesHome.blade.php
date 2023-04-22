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
                <table class="table table-stripped" id="tabel" style="width: 100%">
                    <thead>
                        <tr>
                            <th>Jenis Obat</th>
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
              <h4 class="modal-title">Data Jenis Obat</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              {{-- isian --}}
              <form action="{{ route('type.store') }}" method="post" id="forms">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Obat</label>
                    <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Jenis Obat">
                    <input type="text" hidden class="form-control" id="id" name="id" placeholder="Jenis Obat">
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
    <script>
    $(document).ready(function () {
        loaddata()
    })

    function loaddata() {
        $('#tabel').DataTable({
            serverside: true,
            processing: true,
            ajax: {
                url : "{{ route('type.index') }}"
            },
            columns: [
                { data: 'kategori', name: 'kategori' },
                { data: 'action', name: 'action', orderable: false },
            ]
        })
    }

    // function number(evt) {
    //     var charCode = (evt.which) ? evt.which : event:keyCode
    //         if (charCode > 31 && (charCode < 48 || charCode > 57))
    //             return false;
    //         return true;
    // }

    $(document).on('submit', 'form', function (event) {
        event.preventDefault();
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            typeData: "JSON",
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function (res) {
                console.log(res);
                $('#btn-tutup').click()
                $('#tabel').DataTable().ajax.reload()
                alert(res.text)
            }, 
            error : function (xhr) {
                console.log(xhr);
            }
        })
    })

    $(document).on('click', '.edit', function () {
        $('#forms').attr('action', "{{ route('type.updates') }}")
        let id = $(this).attr('id')
        $.ajax({
            url : "{{ route('type.edits') }}",
            type : 'post',
            data : {
                id : id,
                _token : "{{ csrf_token() }}"
            },
            success: function (res) {
                console.log(res);
                $('#id').val(res.id)
                $('#kategori').val(res.kategori)
                $('#btn-tambah').click()
            },
            error : function (xhr) {
                console.log(xhr);
            }
        })
    })

    $(document).on('click', '.hapus', function () {
        let id = $(this).attr('id')
        $.ajax({
            url : "{{ route('type.hapus') }}",
            type : 'post',
            data : {
                id : id,
                _token : "{{ csrf_token() }}"
            },
            success: function (res) {
                console.log(res);
                $('#tabel').DataTable().ajax.reload()
                alert(res.text)
            },
        })
    })

    </script>
@endsection
    
