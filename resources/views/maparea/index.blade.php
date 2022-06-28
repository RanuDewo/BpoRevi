@extends('layouts.layout')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Maps Area</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                    <li class="breadcrumb-item active">Master Area</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <button class="btn btn-primary  mt-3 mb-3" data-bs-toggle="modal"
                                data-bs-target="#basicModal"><i class="ri-add-box-fill"></i> Tambah Data</button>

                            <!-- Table with stripped rows -->
                            <table class="table datatable table-striped" id="tabel-data">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama Area</th>
                                        <th scope="col">Nama Cabang</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($m as $i)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $i->nama_area }}</td>
                                            <td>{{ $i->nama_cabang }}</td>

                                            <td><a href="#" class="btn btn-success btn-sm mt-2 mr-2 edit"
                                                    data-id="{{ $i->id_maps_area }}" data-bs-toggle="modal"
                                                    data-bs-target="#editModal" id="edit"><i class="bi bi-pencil-square"></i>
                                                    Edit</a>
                                                <a href="{{ url('/master_area/hapus/' . $i->id_maps_area) }}" id="hapus"
                                                    class="btn btn-danger btn-sm mt-2 mr-2 hapus"
                                                    data-id="{{ $i->nama_area }}"><i class="bi bi-trash"></i>
                                                    Hapus</a>
                                            </td>
                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <div class="modal fade" id="basicModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Maping Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ url('master_area') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group mt-2">
                              
                                <label for="">Nama Area</label>
                                <select class = "form-control">
                                    <?php
                                        $jumA  = count($area);
                                        $jumA-- ;
                                        for ($x = 0; $x <= $jumA; $x++) {
                                            echo "<option value=". $area[$x]->id . ">". $area[$x]->nama_area . "</option>" ;  
                                        }
                                   ?>
                                </select>

                                <label for="">Nama Cabang</label>
                                <select class = "form-control">
                                    <?php
                                        $jumB  = count($cabang);
                                        $jumB-- ;
                                        for ($x = 0; $x <= $jumB; $x++) {
                                            echo "<option value=". $cabang[$x]->id . ">". $cabang[$x]->nama_cabang . "</option>" ;  
                                        }
                                   ?>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-primary">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="modal fade" id="editModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ url('master_area/update') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div id="modal_edit1">

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </main>
    @include('layouts.komponen.alert')
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('.hapus').on('click', function(events) {
                events.preventDefault();
                var id = $(this).data('id');
                console.log(id);
                const url = $(this).attr('href');
                var id = $(this).data('id');
                Swal.fire({
                    title: 'Peringatan',
                    text: "Apakah Data = " + id + ", ingin dihapus?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = url;
                    }
                })
            })

            $('.edit').on('click', function() {
                var id = $(this).data("id");
                alert(id);
                $.ajax({
                    type: 'GET',
                    url: 'master_area/edit/' + id,
                    success: function(data) {
                        $('#modal_edit1').html(data)
                        // console.log(data)
                    }
                })
            })
            // $('.datatable').DataTable({
            //     responsive: true
            // });

        })
    </script>

@endsection
