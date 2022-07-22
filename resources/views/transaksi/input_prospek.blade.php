@extends('layouts.layout')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Input Prospek</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                    <li class="breadcrumb-item active">Input Prospek</li>
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
                            <table class="table datatable table-striped mt-4" id="tabel-data">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">No Tansaksi</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">No bpkb</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">User</th>
                                        <th scope="col">Option</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($t as $i)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$i->no_trans}}</td>
                                            <td>{{$i->nama}}</td>
                                            <td>{{$i->nobpkb}}</td>
                                            <td>{{$i->phone}}</td>
                                            <td></td>
                                            <td></td>
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
                        <h5 class="modal-title">Input Prospek</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ url('input_prospek') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group mt-2">
                                <label for="">Nama</label>
                                <input type="text" name="nama" class="form-control mt-2" autofocus required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Nama Lengkap </label>
                                <input type="text" name="nama_lengkap" class="form-control mt-2" autofocus required>
                            </div>

                            <div class="form-group mt-2">
                                <label for="">Phone</label>
                                <input type="text" name="phone" class="form-control mt-2" autofocus required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Merek</label>
                                <input type="text" name="merek" class="form-control mt-2" autofocus required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="">No Bpkb</label>
                                <input type="text" name="nobpkb" class="form-control mt-2" autofocus required>
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

    </main>
    @include('layouts.komponen.alert')
@endsection

@section('script')
    <script>
        $('.datatable').DataTable({
            responsive: true
        });
    </script>
@endsection
