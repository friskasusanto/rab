<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Belanja_modal_pengadaan_gedung_blud extends Model
{
    public function supplier()
    {
    	return $this->belongsTo('App\Supplier');
    }
}
