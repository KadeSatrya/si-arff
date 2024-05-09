<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataLog;
use App\Models\DataIncident;
use App\Models\DataMedic;
use App\Models\DataMove;

class IncidentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_logs = DataLog::with(['dataIncident','dataMedic','dataMove'])->paginate(5);
    
        return view('pesawat.index', compact('data_logs'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pesawat.createData');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate the form fields
    $request->validate([
        'utc' => 'required|date_format:H:i:s',
        'waktu' => 'required|date_format:H:i:s',
        'tanggal' => 'required|date_format:Y-m-d',
        'nama' => 'required|string|max:255',
        'penelpon' => 'required|string|max:255',
        'no_telp' => 'required|string|max:255',
        'onduty' => 'required|string|in:Team Leader,Squad Leader,Officers',
        'catatan' => 'nullable|string',
        'maskapai' => 'required|string|max:255',
        'call_sign' => 'required|string|max:255',
        'tipe_pesawat' => 'required|string|max:255',
        'runway' => 'required|string|in:09,27',
        'jenis_kerusakan' => 'required|string|max:255',
        'eta' => 'required|date_format:Y-m-d H:i:s',
        'pob' => 'required|string|max:255',
        'fuel' => 'required|string|max:255',
        'barang_berbahaya' => 'required|string|max:255',
        'sumber2' => 'required|string|max:255',
        'lokasi2' => 'required|string|max:255',
        'kondisi' => 'required|string|max:255',
        'jenis_kelamin' => 'required|string|in:LAKI-LAKI,PEREMPUAN',
        'kesadaran' => 'required|string|in:Sadar,Tidak Sadar',
        'bernafas' => 'required|string|in:Bernafas,Tidak Bernafas',
        'telepon_ambulan' => 'required|string|max:255',
    ]);

    // Create a new data log record
    $dataLog = DataLog::create($request->only([
        'utc', 'waktu', 'tanggal', 'nama', 'penelpon', 'no_telp', 'onduty', 'catatan',
    ]));

    // Create a new data incident record
    $dataIncident = DataIncident::create($request->only([
        'maskapai', 'call_sign', 'tipe_pesawat', 'runway', 'jenis_kerusakan', 'eta', 'pob', 'fuel', 'barang_berbahaya',
    ]));

    // Create a new data medic record
    $dataMedic = DataMedic::create($request->only([
        'sumber2', 'maskapai', 'call_sign', 'lokasi2', 'eta', 'kondisi', 'jenis_kelamin', 'kesadaran', 'bernafas', 'telepon_ambulan',
    ]));

    // Create a new data move record
    $dataMove = DataMove::create($request->only([
        'bergerak', 'tiba_tkp', 'control_time', 'rescue_time', 'extinguish_time', 'kembali_fs', 'stop_time', 'sebelum', 'sesudah',
    ]));

    // Associate the data incident and data move records with the data log record
    $dataLog->DataIncident()->associate($dataIncident);
    $dataLog->DataMedic()->associate($dataMedic);
    $dataLog->DataMove()->associate($dataMove);
    $dataLog->save();

    // Redirect to the data log index page
    return redirect()->route('data-log.index');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
