<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMedic extends Model
{
    use HasFactory;

    protected $primaryKey = 'idmedic';
    protected $table = 'data_medics';
    protected $foreignKey = 'data_logs_id';
    protected $connection = 'mysql';

    protected $fillable = [
        'sumber',
        'maskapai', 
        'call_sign', 
        'lokasi',  
        'eta', 
        'kondisi', 
        'jenis_kelamin', 
        'kesadaran',
        'bernafas',
        'telepon_ambulan',
        'data_logs_id',
    ];

    public function dataLog()
    {
        return $this->belongsTo(DataLog::class);
    }

}
