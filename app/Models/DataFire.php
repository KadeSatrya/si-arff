<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataFire extends Model
{
    use HasFactory;

    protected $primaryKey = 'idfire';
    protected $table = 'data_fires';
    protected $foreignKey = 'data_logs_id';
    protected $connection = 'mysql';

    protected $fillable = [
        'sumber', 
        'lokasi', 
        'keterangan', 
        'data_logs_id',
    ];

    public function dataLog()
    {
        return $this->belongsTo('App\Models\DataLog', 'data_logs_id');
    }
}
