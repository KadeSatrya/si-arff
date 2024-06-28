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

                            <div class="px-2">
                                <a class="btn btn-success" href="/kecelakaan-pesawat/create" style="margin-top: 5px">+</a>
                            </div>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" width="100%" cellspacing="0">
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
                                            @if($data->DataIncident != null)
                                            <tr>
                                                <td>{{ $data->tanggal }}</td>
                                                <td>{{ $data->DataIncident->tipe_pesawat }}</td>
                                                <td>{{ $data->DataIncident->maskapai }}</td>
                                                <td>{{ $data->DataIncident->level_siaga }}</td>
                                                <td> <a class="btn btn-info"
                                                    href="{{ route('pdf.accident', $data->idlog) }}">Show</a>
                                                </td>
                                            </tr>
                                            @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @if($data_logs != null)
                                    <nav>
                                        <ul class="pagination pagination-sm justify-content-center">
                                            {{ $data_logs->links() }}
                                        </ul>
                                    </nav>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End of Main Content -->

            @include('partials.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
@endsection
