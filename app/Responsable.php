<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{ 
   protected $fillable = ['Nombre_ResponsableT', 'Telefono', 'Cargo'];//

   public function tramites()
    {
        return $this->hasMany('App\Tramite', 'id_Responsable');
    }
}
