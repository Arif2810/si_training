<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $primaryKey = 'id_rute';
	protected $guarded  = ['created_at', 'updated_at']; 
}
