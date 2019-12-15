<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model{

  protected $primaryKey = 'id_jadwal';
	protected $guarded  = ['created_at', 'updated_at'];

	public function employees(){

        return $this->belongsTo(Employee::class, 'id_karyawan');
    }

    public function routes(){

        return $this->belongsTo(Route::class, 'id_rute');
    }

    public function venues(){

        return $this->belongsTo(Venue::class, 'id_venue');
    }

    public function categories(){

        return $this->belongsTo('App\Category', 'id_kategori');
    }


}
