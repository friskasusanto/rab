<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengadaan_alat_angkut_darat_takbermotor extends Model
{
    public function supplier()
    {
    	return $this->belongsTo('App\Supplier');
    }
}
