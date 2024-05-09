<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataLog extends Model
{
    use HasFactory;
    protected $primaryKey = 'idlog';
    protected $table = 'data_logs';
    protected $connection = 'mysql';

    protected $fillable = [
        'rffs_no', 'utc', 'waktu', 'tanggal', 'nama', 'penelpon', 'no_telp', 'onduty', 'catatan', 'data_logs_id',
    ];

    public function dataIncident()
    {
        return $this->hasOne('App\Models\DataIncident', 'data_logs_id');
    }

    public function dataFire()
    {
        return $this->hasOne('App\Models\DataFire', 'data_logs_id');
    }

    public function dataMove()
    {
        return $this->hasMany('App\Models\DataMove', 'data_logs_id');
    }

    public function dataMedic()
    {
        return $this->hasOne('App\Models\DataMedic', 'data_logs_id');
    }

}
