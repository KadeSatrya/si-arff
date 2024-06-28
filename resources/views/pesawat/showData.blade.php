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
                    <div class="p-2" style="border: 1px solid #000;">
                        <h3>Level Siaga</h3>
                        <div class="row">
                            <div class="col">
                                <strong>Level Siaga :</strong>
                                <p>{{ $data->$DataIncident->level_siaga }}</p>
                            </div>
                        </div>
                        <hr style="border:1px solid #000;">
                        <h3>Penelpon</h3>
                        <div class="row">
                            <div class="col">
                                <Strong>Nama :</Strong>
                                <p>{{ $data->nama }}</p>
                            </div>
                            <div class="col">
                                <Strong>Asal Telepon :</Strong>
                                <p>{{ $data->penelpon }}</p>
                            </div>
                            <div class="col">
                                <Strong>No Telp :</Strong>
                                <p>{{ $data->$no_telp }}</p>
                            </div>
                        </div>
                        <hr style="border:1px solid #000;">

                        <h3>Kecelakaan Pesawat</h3>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <div class="form-group">
                                    <Strong>Maskapai :</Strong>
                                    <p>{{ $data->$DataIncident->maskapai }}</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <div class="form-group">
                                    <Strong>Tipe Pesawat :</Strong>
                                    <p>{{ $data->$DataIncident->tipe_pesawat }}</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <div class="form-group">
                                    <Strong>Callsign :</Strong>
                                    <p>{{ $data->$DataIncident->call_sign }}</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <div class="form-group">
                                    <Strong>Runway :</Strong>
                                    <p>{{ $data->$DataIncident->runway }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <Strong>Jenis Kerusakan :</Strong>
                                    <p>{{ $data->$DataIncident->jenis_kerusakan }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <strong>E.T.A :</strong>
                                <p>{{ $data->$DataIncident->eta }}</p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <strong>P.O.B :</strong>
                                <p>{{ $data->$DataIncident->pob }}</p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <strong>Fuel :</strong>
                                <p>{{ $data->$DataIncident->fuel }}</p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <strong>Barang-Barang Berbahaya :</strong>
                                <p>{{ $data->$DataIncident->barang_berbahaya }}</p>
                            </div>
                        </div>
                        <hr style="border:1px solid #000;">

                        <h3>Panggilan Medis</h3>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <div class="form-group">
                                    <Strong>Maskapai :</Strong>
                                    <p>{{ $data->$DataIncident->maskapai }}</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <div class="form-group">
                                    <Strong>Callsign :</Strong>
                                    <p>{{ $data->$DataIncident->call_sign }}</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <div class="form-group">
                                    <Strong>Lokasi :</Strong>
                                    <p>{{ $data->$DataIncident->lokasi }}</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <strong>E.T.A :</strong>
                                <p>{{ $data->$DataIncident->eta }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <Strong>Kondisi pasien :</Strong>
                                    <p>{{ $data->$DataIncident->level_siaga }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <strong>Jenis Kelamin :</strong>
                                <p>Pria</p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <strong>Kesadaran :</strong>
                                <p>Sadar</p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <strong>Pernafasan :</strong>
                                <p>Bernafas</p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <strong>Telepon Ambulan(KKP) :</strong>
                                <p>Ya</p>
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
