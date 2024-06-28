<!DOCTYPE html>
<html>
<body>
    @php
        $level_siaga_map = [
            1 => 'Local Standby',
            2 => 'Full Emergency',
            3 => 'Aircraft Accident'
        ];
    @endphp
    <div><h2>Detail pelaporan</h2></div>
    <hr>
    <div><b>Tanggal:</b> {{$log->tanggal}}</div>
    <div><b>Waktu:</b> {{$log->waktu}} (UTC{{$log->utc}})</div>
    <div><b>Nama Penelpon:</b> {{$log->nama}}</div>
    <div><b>Penelpon:</b> {{$log->penelpon}}</div>
    <div><b>No Telepon:</b> {{$log->no_telp}}</div>
    <br>

    <div><h2>Kecelakaan Pesawat</h2></div>
    <hr>
    <div><b>Level Siaga:</b> {{$level_siaga_map[$incident->level_siaga]}} ({{$incident->level_siaga}})</div>
    <div><b>Maskapai:</b> {{$incident->maskapai}}</div>
    <div><b>Call Sign:</b> {{$incident->call_sign}}</div>
    <div><b>Tipe Pesawat:</b> {{$incident->tipe_pesawat}}</div>
    <div><b>Runway:</b> {{$incident->runway}}</div>
    <div><b>Jenis Kerusakan:</b> {{$incident->jenis_kerusakan}}</div>
    <div><b>E.T.A:</b> {{$incident->eta}}</div>
    <div><b>P.O.B:</b> {{$incident->pob}}</div>
    <div><b>FUEL:</b> {{$incident->fuel}}</div>
    <div><b>Barang-Barang Berbahaya:</b> {{$incident->barang_berbahaya}}</div>
    <br>

    <div><h2>Panggilan Medis</h2></div>
    <hr>
    <div><b>Lokasi Sumber:</b> {{$medic->sumber}}</div>
    <div><b>Lokasi:</b> {{$medic->lokasi}}</div>
    <div><b>Kondisi Pasien:</b> {{$medic->kondisi}}</div>
    <div><b>Jenis Kelamin:</b> {{$medic->jenis_kelamin}}</div>
    <div><b>Kesadaran:</b> {{$medic->kesadaran}}</div>
    <div><b>Bernafas:</b> {{$medic->bernafas}}</div>
    <div><b>Telepon Ambulan:</b> {{$medic->telepon_ambulan}}</div>
    
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>Kendaraan</th>
                <th>Tiba Di TKP</th>
                <th>Control Time</th>
                <th>Rescue Time</th>
                <th>Extinguish Time</th>
                <th>Kembali ke FS</th>
                <th>Stop Time</th>
                <th>Perubahan Kategori (Before)</th>
                <th>Perubahan Kategori (After)</th>
            </tr>
        </thead>
        @foreach ($movements as $movement)
        <tbody>
            <td align="center">{{$loop->iteration}}</td>
            <td align="center">{{$movement->tiba_tkp}}</td>
            <td align="center">{{$movement->control_time}}</td>
            <td align="center">{{$movement->rescue_time}}</td>
            <td align="center">{{$movement->extinguish_time}}</td>
            <td align="center">{{$movement->kembali_fs}}</td>
            <td align="center">{{$movement->stop_time}}</td>
            <td align="center">{{$movement->sebelum}}</td>
            <td align="center">{{$movement->sesudah}}</td>
        </tbody>
        @endforeach
    </table>

    <br>
    <div><h2>Petugas yang Bertanggung Jawab</h2></div>
    <div>On Duty: {{$log->onduty}}</div>

    <br>
    <div><h2>Catatan</h2></div>
    <div>{{$log->catatan}}</div>
</body>
</html>