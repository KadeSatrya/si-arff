@extends('layouts.main_layout')
@section('container')
    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('partials.sidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('partials.topbar')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="container mt-5 px-2">

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Data Aircraft Accident</h6>
                            </div>
                            <div class="mb-2 d-flex justify-content-between align-items-center">

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success " data-toggle="modal" data-target="#level" style="margin-left: 10px; margin-top:5px">
                                    +
                                </button>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th scope="col" width="15%">Tanggal</th>
                                                <th scope="col" width="20%">Tipe Pesawat</th>
                                                <th scope="col" width="20%">Maskapai</th>
                                                <th scope="col" width="5%">Level Siaga</th>
                                                <th scope="col" width="10%">Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th scope="col" width="15%">Tanggal</th>
                                                <th scope="col" width="20%">Tipe Pesawat</th>
                                                <th scope="col" width="20%">Maskapai</th>
                                                <th scope="col" width="5%">Level Siaga</th>
                                                <th scope="col" width="10%">Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($data_logs as $data)
                                            <tr>
                                                <td>{{ $data->tanggal }}</td>
                                                <td>{{ $data->maskapai }}</td>
                                                <td>{{ $data->tipe_pesawat }}</td>
                                                <td>{{ $data->call_sign }}</td>
                                                <td> <a class="btn btn-info"
                                                    href="{{ route('aircraft.show', $data->idlog) }}">Show</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
                @include('partials.level_siaga')

            </div>
            <!-- End of Main Content -->

            @include('partials.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
@endsection
