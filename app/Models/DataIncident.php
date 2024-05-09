<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataIncident extends Model
{
    use HasFactory;

    protected $primaryKey = 'idincident';
    protected $table = 'data_incidents';
    protected $foreignKey = 'data_logs_id';
    protected $connection = 'mysql';

    protected $fillable = [
        'maskapai', 
        'call_sign', 
        'tipe_pesawat', 
        'runway', 
        'jenis_kerusakan', 
        'eta', 'pob', 'fuel', 'barang_berbahaya', 'data_logs_id',
    ];

    public function dataLog()
    {
        return $this->belongsTo('App\Models\DataLog', 'data_logs_id');
    }
}
