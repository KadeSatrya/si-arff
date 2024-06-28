<?php

namespace App\Http\Controllers;

use Exception;
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
        $data_logs = DataLog::with(['dataIncident','dataMedic','dataMove'])
        ->whereHas('dataIncident')
        ->whereDoesntHave('dataFire')
        ->simplePaginate(5);
    
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
    try{
    // Validate the form fields
    $request->validate([
        'level_siaga' => 'required',
        'utc' => 'required',
        'waktu' => 'required',
        'tanggal' => 'required|date_format:Y-m-d',
        'nama' => 'required|string|max:255',
        'penelpon' => 'required|string|max:255',
        'no_telp' => 'required|string|max:255',
        'onduty' => 'required|string|in:Team Leader,Squad Leader,Officer',
        'catatan' => 'nullable|string',
        'maskapai' => 'required|string|max:255',
        'call_sign' => 'required|string|max:255',
        'tipe_pesawat' => 'required|string|max:255',
        'runway' => 'required|string|in:09,27',
        'jenis_kerusakan' => 'required|string|max:255',
        'eta' => 'required',
        'pob' => 'required|string|max:255',
        'fuel' => 'required|string|max:255',
        'barang_berbahaya' => 'required|string|max:255',
        'sumber2' => 'required|string|max:255',
        'lokasi' => 'required|string|max:255',
        'kondisi' => 'required|string|max:255',
        'jenis_kelamin' => 'required|string|in:pria,wanita',
        'kesadaran' => 'required|string|in:sadar,tidak sadar',
        'bernafas' => 'required|string|in:bernafas,tidak bernafas',
        'telepon_ambulan' => 'required|string|max:255',
    ]);}
    catch (Exception $e) {
        $errors = $e->validator->errors()->toArray();
        
        foreach ($errors as $field => $messages) {
            foreach ($messages as $message) {

                echo "Validation failed for field '$field': $message";
            }
        }
        return response()->json(['message' => 'Validation failed'], 422);
    }

    // Create a new data log record
    $dataLog = DataLog::create($request->only([
        'utc', 'waktu', 'tanggal', 'nama', 'penelpon', 'no_telp', 'onduty', 'catatan',
    ]));

    $logId = $dataLog->idlog;

    // Create a new data incident record
    $dataIncident = DataIncident::create($request->only([
        'level_siaga', 'maskapai', 'call_sign', 'tipe_pesawat', 'runway', 'jenis_kerusakan', 'eta', 'pob', 'fuel', 'barang_berbahaya',
    ]) + ['data_logs_id' => $logId]);

    // Create a new data medic record
    $dataMedic = DataMedic::create($request->only([
        'sumber2', 'maskapai2', 'call_sign2', 'runway', 'jenis_kerusakan', 'eta', 'pob', 'fuel', 'barang_berbahaya',
        'lokasi', 'kondisi', 'jenis_kelamin', 'kesadaran', 'bernafas', 'telepon', 'telepon_ambulan',
    ]) + ['data_logs_id' => $logId]);


    $datasetMove = $request->only([
        'bergerak', 'tiba_tkp', 'control_time', 'rescue_time', 'extinguish_time', 'kembali_fs', 'stop_time', 'sebelum', 'sesudah',
    ]);

    $nullExist = false;
    // Create a new data move record
    for ($x = 0; $x < count($datasetMove['bergerak']); $x++) {
        $restructuredDatasetMove = ['data_logs_id' => $logId];
        foreach ($datasetMove as $key => $value) {
            if($value[$x] == null) $nullExist = true;
            $restructuredDatasetMove[$key] = $value[$x];
        }
        if($nullExist) break;
        $dataMove = DataMove::create($restructuredDatasetMove);
        $dataMove->save();
    }

    // Associate the data incident and data move records with the data log record
    //$dataLog->DataIncident()->associate($dataIncident);
    //$dataLog->DataMedic()->associate($dataMedic);
    //$dataLog->DataMove()->associate($dataMove);
    $dataMedic->save();
    $dataIncident->save();
    $dataLog->save();

    // Redirect to the data log index page
    return redirect()->route('kecelakaan-pesawat.index');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = DataLog::with(["dataIncident"])->find($id);
        return view('pesawat.showData', compact("data"));
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
