<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tramite extends Model
{
  protected $fillable = ['Nombre_Tramite', 'Descripcion_Tramite', 'id_Responsable'];  //

  public function responsables()
    {
        return $this->BelongsTo('App\Responsable', 'id_Responsable');
        
    }
}
