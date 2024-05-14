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

                    <form action="#" method="post">
                        @csrf
                        <input type="hidden" name="idpesawat" id="idpesawat">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="utc">UTC :</label>
                                    <input style="border-style: groove; border-color:black" type="text"
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

                        <h3>Kecelakaan Pesawat</h3>
                        <hr style="border: 1px solid">
                        <input type="hidden" name="idincident" id="idincident">
                        <div class="form-group">
                            <label for="level_siaga">Level Siaga :</label>
                            <select style="border-style: groove; border-color:black" class="form-control" id="level_siaga"
                                name="level_siaga">
                                <option value="1">1: Local Standby</option>
                                <option value="2">2: Full Emergency</option>
                                <option value="3">3: Aircraft Accident</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="maskapai">Maskapai :</label>
                                    <input style="border-style: groove; border-color:black" type="text"
                                        class="form-control" id="maskapai" name="maskapai">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="callsign">Call Sign :</label>
                                    <input style="border-style: groove; border-color:black" type="text"
                                        class="form-control" id="call_sign" name="call_sign">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tipepesawat">Tipe Pesawat :</label>
                                    <input style="border-style: groove; border-color:black" type="text"
                                        class="form-control" id="tipe_pesawat" name="tipe_pesawat">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Runway :</label>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="radio" id="runway1" name="runway" value="09" >
                                            <label for="runway1">09</label><br>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" id="runway2" name="runway" value="27" >
                                            <label for="runway2">27</label><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kerusakan">Jenis Kerusakan :</label>
                            <textarea style="border-style: groove; border-color:black" rows="5" cols="50" type="textarea"
                                class="form-control" id="jenis_kerusakan" name="jenis_kerusakan"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="eta">E.T.A :</label>
                                    <input style="border-style: groove; border-color:black"
                                        style="border-style: groove; border-color:black" type="text"
                                        class="form-control" id="eta" name="eta">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="pob">P.O.B :</label>
                                    <input style="border-style: groove; border-color:black" type="text"
                                        class="form-control" id="pob" name="pob">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="fuel">FUEL :</label>
                                    <input style="border-style: groove; border-color:black"
                                        style="border-style: groove; border-color:black" type="text"
                                        class="form-control" id="fuel" name="fuel">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="barang_berbahaya">Barang-Barang Berbahaya :</label>
                                    <input style="border-style: groove; border-color:black" type="text"
                                        class="form-control" id="barang_berbahaya" name="barang_berbahaya">
                                </div>
                            </div>
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
                                    <label for="lokasi">Lokasi :</label>
                                    <input style="border-style: groove; border-color:black" type="text"
                                        class="form-control" id="lokasi" name="lokasi">
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
                                            <input type="radio" name="jenis_kelamin" id="pria" value="pria" >
                                            <label for="pria">Pria</label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="radio" name="jenis_kelamin" id="wanita" value="wanita" >
                                            <label for="wanita">Wanita</label>
                                        </div>
                                    </div>
                                    <br>
                                    <label for="kesadaran">Kesadaran :</label>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <input type="radio" name="kesadaran" id="sadar" value="sadar" >
                                            <label for="sadar">Sadar</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="radio" name="kesadaran" id="tidak_sadar" value="tidak sadar" >
                                            <label for="tidak_sadar">Tidak Sadar</label>
                                        </div>
                                    </div>
                                    <br>
                                    <label for="bernafas">Bernafas :</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="radio" name="bernafas" id="ya" value="bernafas" >
                                            <label for="ya">Bernafas</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="radio" name="bernafas" id="tidak_bernafas"
                                                value="tidak bernafas" >
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
                                <input type="radio" name="onduty" id="team" value="Team Leader">
                                <label for="team">Team Leader</label>
                            </div>
                            <div class="col-md-4">
                                <input type="radio" name="onduty" id="squad" value="Squad Leader" >
                                <label for="squad">Squad Leader</label>
                            </div>
                            <div class="col-md-4">
                                <input type="radio" name="onduty" id="officer" value="Officer" >
                                <label for="officer">Officer</label>
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
