<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
   protected $fillable = ['nome'];
   protected $primaryKey = 'id_tipo';
}
