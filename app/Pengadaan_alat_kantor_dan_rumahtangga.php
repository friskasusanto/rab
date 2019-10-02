<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengadaan_alat_kantor_dan_rumahtangga extends Model
{
    public function supplier()
    {
    	return $this->belongsTo('App\Supplier');
    }
}
