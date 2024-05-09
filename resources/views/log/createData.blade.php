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

                    <form id="form" action="{{ route('fire.store') }}" method="POST">
                        @csrf
                        <h3>Penelpon</h3>
                        <hr style="border: 1px solid">
                        <input type="hidden" name="idlog" id="idlog">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="utc">UTC :</label>
                                    <input style="border-style: groove; border-color:black" type="time"
                                        class="form-control" id="utc" name="utc" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="waktu">Waktu :</label>
                                    <input style="border-style: groove; border-color:black" type="time"
                                        class="form-control" id="waktu" name="waktu" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tanggal">Tanggal :</label>
                                    <input style="border-style: groove; border-color:black" type="date"
                                        class="form-control" id="tanggal" name="tanggal" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="nama">Nama :</label>
                                    <input style="border-style: groove; border-color:black" type="text"
                                        class="form-control" id="nama" name="nama">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="penelpon">Penelpon :</label>
                                    <select style="border-style: groove; border-color:black" class="form-control"
                                        id="penelpon" name="penelpon">
                                        <option value="Hotline">Hotline</option>
                                        <option value="Umum">Umum</option>
                                        <option value="PABX">PABX</option>
                                        <option value="Airlines">Airlines</option>
                                        <option value="HT">HT</option>
                                        <option value="Watchroom">Watchroom</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="no_telp">No Telp :</label>
                            <input style="border-style: groove; border-color:black" type="text" class="form-control"
                                id="no_telp" name="no_telp">
                        </div>

                        <h3>Domestic Fire</h3>
                        <hr style="border: 1px solid">
                        <div class="form-group">
                            <label for="sumber">Sumber :</label>
                            <select style="border-style: groove; border-color:black" class="form-control" id="sumber"
                                name="sumber">
                                <option value="Kebakaran">Kebakaran</option>
                                <option value="Fire Alarm">Fire Alarm</option>
                                <option value="Fuel Spill">Fuel Spill</option>
                                <option value="FOD">FOD</option>
                                <option value="Binatang Liar">Binatang Liar</option>
                                <option value="Lainnya">Lainnya</option>
                                <option value="T1">T1</option>
                                <option value="T2">T2</option>
                                <option value="Gedung Lainnya">Gedung Lainnya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="lokasi">Lokasi :</label>
                            <textarea style="border-style: groove; border-color:black" type="textarea" class="form-control" id="lokasi"
                                name="lokasi"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan :</label>
                            <textarea style="border-style: groove; border-color:black" rows="5" cols="50" type="textarea"
                                class="form-control" id="keterangan" name="keterangan"></textarea>
                        </div>

                        <h3>Panggilan Medis</h3>
                        <hr style="border: 1px solid">
                        <div class="form-group">
                            <label for="sumber2">Lokasi Sumber</label>
                            <select style="border-style: groove; border-color:black" class="form-control" id="sumber2"
                                name="sumber2">
                                <option readonly>-- Sumber --</option>
                                <option value="Di Pesawat">Di Pesawat</option>
                                <option value="Di Terminal">Di Terminal</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="lokasi2">Lokasi :</label>
                                    <input style="border-style: groove; border-color:black" type="text"
                                        class="form-control" id="lokasi2" name="lokasi2">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kondisi">Kondisi Pasien :</label>
                            <textarea style="border-style: groove; border-color:black" rows="5" cols="50" type="textarea"
                                class="form-control" id="kondisi" name="kondisi"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <br>
                                    <label for="jenis_kelamin">Jenis Kelamin :</label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="radio" name="jenis_kelamin" id="pria" value="pria">
                                            <label for="pria">Pria</label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="radio" name="jenis_kelamin" id="wanita" value="wanita">
                                            <label for="wanita">Wanita</label>
                                        </div>
                                    </div>
                                    <br>
                                    <label for="kesadaran">Kesadaran :</label>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <input type="radio" name="kesadaran" id="sadar" value="sadar">
                                            <label for="sadar">Sadar</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="radio" name="kesadaran" id="tidak_sadar" value="tidak sadar">
                                            <label for="tidak_sadar">Tidak Sadar</label>
                                        </div>
                                    </div>
                                    <br>
                                    <label for="bernafas">Bernafas :</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="radio" name="bernafas" id="ya" value="bernafas">
                                            <label for="ya">Bernafas</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="radio" name="bernafas" id="tidak_bernafas"
                                                value="tidak bernafas">
                                            <label for="tidak_bernafas">Tidak Bernafas</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="telepon_ambulan">Telepon Ambulan (KKP) :</label>
                            <select style="border-style: groove; border-color:black" class="form-control"
                                id="telepon_ambulan" name="telepon_ambulan">
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                                <option value="ADM">ADM</option>
                                <option value="PKP-PK">PKP-PK</option>
                                <option value="CSC">CSC</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="row">
                            <table class="table-bordered" style="border:solid black">
                                <thead>
                                    <tr>
                                        <th style="text-align: center">Kendaraaan</th>
                                        <th style="text-align: center">Bergerak</th>
                                        <th style="text-align: center">Tiba Di TKP</th>
                                        <th style="text-align: center">Control Time</th>
                                        <th style="text-align: center">Rescue Time</th>
                                        <th style="text-align: center">Extinguish Time</th>
                                        <th style="text-align: center">Kembali ke FS</th>
                                        <th style="text-align: center">Stop Time</th>
                                        <th style="text-align: center">Perubahan Kategori (Before)</th>
                                        <th style="text-align: center">Perubahan Kategori (After)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1st</td>
                                        <td><input style="border-style: groove; border-color:black" type="text"
                                                class="form-control" id="bergerak[]" name="bergerak[]"></td>
                                        <td><input style="border-style: groove; border-color:black" type="text"
                                                class="form-control" id="tiba_tkp[]" name="tiba_tkp[]"></td>
                                        <td><input style="border-style: groove; border-color:black" type="text"
                                                class="form-control" id="control_time[]" name="control_time[]"></td>
                                        <td><input style="border-style: groove; border-color:black" type="text"
                                                class="form-control" id="rescue_time[]" name="rescue_time[]"></td>
                                        <td><input style="border-style: groove; border-color:black" type="text"
                                                class="form-control" id="extinguish_time[]" name="extinguish_time[]">
                                        </td>
                                        <td><input style="border-style: groove; border-color:black" type="text"
                                                class="form-control" id="kembali_fs[]" name="kembali_fs[]"></td>
                                        <td><input style="border-style: groove; border-color:black" type="text"
                                                class="form-control" id="stop_time[]" name="stop_time[]"></td>
                                        <td><input style="border-style: groove; border-color:black" type="text"
                                                class="form-control" id="sebelum[]" name="sebelum[]"></td>
                                        <td><input style="border-style: groove; border-color:black" type="text"
                                                class="form-control" id="sesudah[]" name="sesudah[]"></td>
                                    </tr>

                                    <tr>
                                        <td>2nd</td>
                                        <td><input style="border-style: groove; border-color:black" type="text"
                                                class="form-control" id="bergerak[]" name="bergerak[]"></td>
                                        <td><input style="border-style: groove; border-color:black" type="text"
                                                class="form-control" id="tiba_tkp[]" name="tiba_tkp[]"></td>
                                        <td><input style="border-style: groove; border-color:black" type="text"
                                                class="form-control" id="control_time[]" name="control_time[]"></td>
                                        <td><input style="border-style: groove; border-color:black" type="text"
                                                class="form-control" id="rescue_time[]" name="rescue_time[]"></td>
                                        <td><input style="border-style: groove; border-color:black" type="text"
                                                class="form-control" id="extinguish_time[]" name="extinguish_time[]">
                                        </td>
                                        <td><input style="border-style: groove; border-color:black" type="text"
                                                class="form-control" id="kembali_fs[]" name="kembali_fs[]"></td>
                                        <td><input style="border-style: groove; border-color:black" type="text"
                                                class="form-control" id="stop_time[]" name="stop_time[]"></td>
                                        <td><input style="border-style: groove; border-color:black" type="text"
                                                class="form-control" id="sebelum[]" name="sebelum[]"></td>
                                        <td><input style="border-style: groove; border-color:black" type="text"
                                                class="form-control" id="sesudah[]" name="sesudah[]"></td>
                                    </tr>
                                    <tr>
                                        <td>3rd</td>
                                        <td><input style="border-style: groove; border-color:black" type="text"
                                                class="form-control" id="bergerak[]" name="bergerak[]"></td>
                                        <td><input style="border-style: groove; border-color:black" type="text"
                                                class="form-control" id="tiba_tkp[]" name="tiba_tkp[]"></td>
                                        <td><input style="border-style: groove; border-color:black" type="text"
                                                class="form-control" id="control_time[]" name="control_time[]"></td>
                                        <td><input style="border-style: groove; border-color:black" type="text"
                                                class="form-control" id="rescue_time[]" name="rescue_time[]"></td>
                                        <td><input style="border-style: groove; border-color:black" type="text"
                                                class="form-control" id="extinguish_time[]" name="extinguish_time[]">
                                        </td>
                                        <td><input style="border-style: groove; border-color:black" type="text"
                                                class="form-control" id="kembali_fs[]" name="kembali_fs[]"></td>
                                        <td><input style="border-style: groove; border-color:black" type="text"
                                                class="form-control" id="stop_time[]" name="stop_time[]"></td>
                                        <td><input style="border-style: groove; border-color:black" type="text"
                                                class="form-control" id="sebelum[]" name="sebelum[]"></td>
                                        <td><input style="border-style: groove; border-color:black" type="text"
                                                class="form-control" id="sesudah[]" name="sesudah[]"></td>
                                    </tr>

                                    <tr>
                                        <td>4th</td>
                                        <td><input style="border-style: groove; border-color:black" type="text"
                                                class="form-control" id="bergerak[]" name="bergerak[]"></td>
                                        <td><input style="border-style: groove; border-color:black" type="text"
                                                class="form-control" id="tiba_tkp[]" name="tiba_tkp[]"></td>
                                        <td><input style="border-style: groove; border-color:black" type="text"
                                                class="form-control" id="control_time[]" name="control_time[]"></td>
                                        <td><input style="border-style: groove; border-color:black" type="text"
                                                class="form-control" id="rescue_time[]" name="rescue_time[]"></td>
                                        <td><input style="border-style: groove; border-color:black" type="text"
                                                class="form-control" id="extinguish_time[]" name="extinguish_time[]">
                                        </td>
                                        <td><input style="border-style: groove; border-color:black" type="text"
                                                class="form-control" id="kembali_fs[]" name="kembali_fs[]"></td>
                                        <td><input style="border-style: groove; border-color:black" type="text"
                                                class="form-control" id="stop_time[]" name="stop_time[]"></td>
                                        <td><input style="border-style: groove; border-color:black" type="text"
                                                class="form-control" id="sebelum[]" name="sebelum[]"></td>
                                        <td><input style="border-style: groove; border-color:black" type="text"
                                                class="form-control" id="sesudah[]" name="sesudah[]"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <h3>Petugas yang Bertanggung Jawab</h3>
                        <hr style="border: 1px solid">
                        <div class="row">
                            <div class="col-md-4">
                                <input type="radio" name="onduty" id="onduty" value="Team Leader">
                                <label for="onduty">Team Leader</label>
                            </div>
                            <div class="col-md-4">
                                <input type="radio" name="onduty" id="onduty" value="Squad Leader">
                                <label for="onduty">Squad Leader</label>
                            </div>
                            <div class="col-md-4">
                                <input type="radio" name="onduty" id="onduty" value="Officer">
                                <label for="onduty">Officer</label>
                            </div>
                        </div>

                        <h3>Catatan</h3>
                        <hr style="border: 1px solid">
                        <div class="form-group">
                            <textarea style="border-style: groove; border-color:black" rows="5" cols="50" type="textarea"
                                class="form-control" id="catatan" name="catatan"></textarea>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-success">Tambah</button>
                        </div>
                    </form>

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
