<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengadaan_alat_kalibrasi extends Model
{
    public function supplier()
    {
    	return $this->belongsTo('App\Supplier');
    }
}
