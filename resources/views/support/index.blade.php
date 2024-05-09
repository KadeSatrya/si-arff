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

                    <h3>Customer Support</h3>
                    <h6>need help or something went wrong feel free to send message</h6>
                    <br>

                    <form action="#" method="POST">
                        <div class="form-group">
                            <label for="email">Email :</label>
                            <input style="border-style: groove; border-color:black" type="email" class="form-control" id="email"
                                name="email">
                        </div>
                        <div class="form-group">
                            <label for="message">Message :</label>
                            <textarea style="border-style: groove; border-color:black" rows="5" cols="50" type="textarea" class="form-control" id="message" name="message"></textarea>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-success">Tambah</button>
                        </div>
                    </form>

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