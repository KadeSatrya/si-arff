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
                        <h3>Penelpon</h3>
                        <div class="row">
                            <div class="col">
                                <Strong>Nama :</Strong>
                                <p>Joko</p>
                            </div>
                            <div class="col-md-3">
                                <Strong>Asal Telepon :</Strong>
                                <p>Watchroom</p>
                            </div>
                            <div class="col-md-3">
                                <Strong>No Telp :</Strong>
                                <p>554</p>
                            </div>
                        </div>
                        <hr style="border:1px solid #000;">
                        <br>

                        <h3>Domestic Fire</h3>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <div class="form-group">
                                    <Strong>Sumber Kebakaran :</Strong>
                                    <p>Fire Alarm</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <Strong>Lokasi :</Strong>
                                    <p>Terminal</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <Strong>Keterangan :</Strong>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis unde quo
                                        maxime necessitatibus! Porro, laborum nihil eum, error quos cumque obcaecati ut
                                        in molestiae distinctio dolore, sequi ab. Quidem quod labore iste, optio</p>
                                </div>
                            </div>
                        </div>
                        <hr style="border:1px solid #000;">
                        <br>


                        <h3>Panggilan Medis</h3>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <Strong>Lokasi :</Strong>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis unde quo
                                        maxime necessitatibus! Porro, laborum nihil eum, error quos cumque obcaecati ut
                                        in molestiae distinctio dolore, sequi ab. Quidem quod labore iste, optio</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <Strong>Kondisi pasien :</Strong>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis unde quo
                                        maxime necessitatibus! Porro, laborum nihil eum, error quos cumque obcaecati ut
                                        in molestiae distinctio dolore, sequi ab. Quidem quod labore iste, optio</p>
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
