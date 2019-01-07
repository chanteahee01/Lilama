<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Typeproduct;

class Product extends Model
{
    protected $table='product';
    public function Typeproduct(){
         
          {
              return $this->belongsTo('App\Typeproduct', 'type_id', 'id');
          }
    }
}
