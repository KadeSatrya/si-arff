<?php

namespace App\Http\Controllers;
use App\Models\DataLog;
use App\Models\DataFire;
use App\Models\DataIncident;
use App\Models\DataMedic;
use App\Models\DataMove;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function generateFirePdf($id)
    {
        $data = [
            'log' => DataLog::find($id), 
            'fire' => DataFire::where('data_logs_id', $id)->get()[0], 
            'medic' => DataMedic::where('data_logs_id', $id)->get()[0], 
            'movements' => DataMove::where('data_logs_id', $id)->get()];
        $pdf = Pdf::loadView('pdf.fire', $data);
        return $pdf->download('Fire-' . $data['log']->created_at->format('Y-m-d-H:i:s') . '.pdf' );
    }

    public function generateAccidentPdf($id)
    {
        $data = [
            'log' => DataLog::find($id), 
            'incident' => DataIncident::where('data_logs_id', $id)->get()[0], 
            'medic' => DataMedic::where('data_logs_id', $id)->get()[0], 
            'movements' => DataMove::where('data_logs_id', $id)->get()];
        $pdf = Pdf::loadView('pdf.accident', $data);
        return $pdf->download('Accident-' . $data['log']->created_at->format('Y-m-d-H:i:s') . '.pdf');
    }
}
