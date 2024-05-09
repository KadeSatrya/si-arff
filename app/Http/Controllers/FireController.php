<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataLog;
use App\Models\DataFire;
use App\Models\DataMedic;
use App\Models\DataMove;

class FireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $logs = DataLog::with(['dataFire','dataMedic','dataMove'])->paginate(5);
    
        return view('log.index', compact('logs'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('log.createData');
    }

    /**
     * Store a newly created resource in storage.
     */
   // FireController.php
   public function store(Request $request)
    {
        $request->validate([
            'utc' => 'required',
            'waktu' => 'required',
            'tanggal' => 'required',
            'nama' => 'required',
            'penelpon' => 'required',
            'no_telp' => 'required',
            'onduty' => 'required',
            'catatan'=>'required',
            'sumber' => 'required',
        ]);
        // Create a new data log record
        $dataLog = DataLog::create($request->only([
            'utc', 'waktu', 'tanggal', 'nama', 'penelpon', 'no_telp', 'onduty', 'catatan',
        ]));
        
        //EDIT1: Ganti jadi ambil id dari datalog
        $dataLog->save();
        $logId = $dataLog->idlog;

        // Create a new data fire record
        $dataFire = DataFire::create([
            'sumber'=>request('sumber'), 'lokasi'=>request('lokasi'), 'keterangan'=>request('keterangan'), 'data_logs_id' => $logId
        ]); //EDIT2: ganti idlogs jadi data_logs_id, reformat array

        // Set the data_logs_id property of the data incident record
        $dataFire->data_logs_id = $logId;

        // Save the data incident record
        $dataFire->save();

        // Create a new data medic record
        $dataMedic = DataMedic::create($request->only([
            'sumber2', 'maskapai2', 'call_sign2', 'runway', 'jenis_kerusakan', 'eta', 'pob', 'fuel', 'barang_berbahaya',
            'lokasi', 'kondisi', 'jenis_kelamin', 'kesadaran', 'bernafas', 'telepon', 'telepon_ambulan', //EDIT3: Tambah ini
        ]) + ['data_logs_id' => $logId]);

        // Set the data_logs_id property of the data medic record
        $dataMedic->data_logs_id = $logId;

        // Save the data medic record
        $dataMedic->save();

        $datasetMove = $request->only([
            'bergerak', 'tiba_tkp', 'control_time', 'rescue_time', 'extinguish_time', 'kembali_fs', 'stop_time', 'sebelum', 'sesudah',
        ]);

        //Restructure array
        /*$restructuredDatasetMove = [];
        for ($x = 0; $x < count($datasetMove['bergerak']); $x++){
            $restructuredDatasetMove[$x] = [
                $datasetMove['bergerak'][$x],
                $datasetMove['tiba_tkp'][$x],
                $datasetMove['control_time'][$x],
                $datasetMove['rescue_time'][$x],
                $datasetMove['extinguish_time'][$x],
                $datasetMove['kembali_fs'][$x],
                $datasetMove['stop_time'][$x],
                $datasetMove['sebelum'][$x],
                $datasetMove['sesudah'][$x],
                $logId
            ];
        }*/


        // Create a new data move record
        for ($x = 0; $x < count($datasetMove['bergerak']); $x++) {
            $restructuredDatasetMove = ['data_logs_id' => $logId];
            foreach ($datasetMove as $key => $value) {
                $restructuredDatasetMove[$key] = $value[$x];
            }
            //dd($restructuredDatasetMove);



    
            $dataMove = DataMove::create($restructuredDatasetMove);
        }



        // Set the data_logs_id property of the data move record

        $dataMove->data_logs_id = $logId;

        // Save the data move record
        $dataMove->save();

        // Associate the data incident and data move records with the data log record
        //$dataLog->dataFire()->associate($dataFire);
        //$dataLog->dataMedic()->associate($dataMedic);
        //$dataLog->dataMove()->associate($dataMove);
        $dataLog->save();

        // Redirect to the data log index page
        return redirect()->route('domestic-fire.index');
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
