<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barril extends Model
{
   protected $table = ['barris'];
   protected $fillable = ['barril_tipo', 'patrimonio'];
   protected $primaryKey = 'id_barril';
}
