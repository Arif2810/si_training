<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
  protected $primaryKey = 'id_galeri';
  protected $guarded  = ['created_at', 'updated_at'];
}
