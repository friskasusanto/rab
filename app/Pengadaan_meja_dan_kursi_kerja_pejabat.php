<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengadaan_meja_dan_kursi_kerja_pejabat extends Model
{
    public function supplier()
    {
    	return $this->belongsTo('App\Supplier');
    }
}
