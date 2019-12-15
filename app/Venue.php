<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model{

    protected $primaryKey = 'id_venue';
	protected $guarded  = ['created_at', 'updated_at']; 
}
