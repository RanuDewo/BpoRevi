@extends('layouts.layout')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Master Data</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Master Data</li>

                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body mt-5">

                            <form action="{{ url('master_data') }}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Flag</label>
                                    <div class="col-sm-10">
                                        <select name="flag" id="" class="form-select">
                                            <option value="1">source off order</option>
                                            <option value="2">aktifity</option>
                                            <option value="3">cancel</option>
                                            <option value="4">reject</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="row mb-3">

                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Submit Form</button>
                                    </div>
                                </div>

                            </form><!-- End General Form Elements -->

                        </div>
                    </div>

                </div>


            </div>
        </section>

    </main>
@endsection
