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
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Data Domestic Fire</h6>
                            </div>
                            <div class="px-2">
                                <a class="btn btn-success" href="/domestic-fire/create" style="margin-top: 5px">+</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="dataTable" class="table table-bordered" width="100%" cellspacing="0">

                                        <thead>
                                            <tr class="bg-light">
                                                <th scope="col" width="5%">No</th>
                                                <th scope="col" width="10%">Tanggal</th>
                                                <th scope="col" width="10%">Sumber</th>
                                                <th scope="col" width="10%">Lokasi</th>
                                                <th scope="col" width="5%">Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th scope="col" width="5%">No</th>
                                                <th scope="col" width="10%">Tanggal</th>
                                                <th scope="col" width="10%">Sumber</th>
                                                <th scope="col" width="10%">Lokasi</th>
                                                <th scope="col" width="5%">Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($logs as $data)
                                            @if($data->DataFire != null)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $data->tanggal }}</td>
                                                <td>{{ $data->DataFire->sumber }}</td>
                                                <td>{{ $data->DataFire->lokasi }}</td>
                                                <td> <a class="btn btn-info"
                                                    href="{{ route('domesticfire.show', $data->idlog) }}">Show</a>
                                                </td>
                                            </tr>
                                            @endif
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            @include('partials.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
@endsection
