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

                    <h4>National Regulation</h4>
                    <hr style="border:1px solid #000;">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <Strong>PR 30 :</Strong>
                                <a href="{{ url('/download-pdf-national-pr') }}" class="btn btn-primary">Download PDF</a>
                            </div>
                        </div>
                    </div>
                    <br>

                    <h4>International Regulation</h4>
                    <hr style="border:1px solid #000;">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <Strong>Document 9137 :</Strong>
                                <a href="{{ url('/download-pdf-international-9137') }}" class="btn btn-primary">Download PDF</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <Strong>Annex 14 Aerodromes :</Strong>
                                <a href="{{ url('/download-pdf-international-annex') }}" class="btn btn-primary">Download PDF</a>
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
