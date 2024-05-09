<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMove extends Model
{
    use HasFactory;

    protected $primaryKey = 'idmedic';
    protected $table = 'data_moves';
    protected $foreignKey = 'data_logs_id';
    protected $connection = 'mysql';

    protected $fillable = [
        'bergerak', 'tiba_tkp', 'control_time', 'rescue_time', 'extinguish_time', 'kembali_fs', 'stop_time', 'sebelum', 'sesudah', 'data_logs_id',
    ];

    public function dataLog()
    {
        return $this->belongsTo(DataLog::class);
    }

}
