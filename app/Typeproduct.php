<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
class Typeproduct extends Model
{
    protected $table="typeproduct";
    public function Product()      
           {
               return $this->hasMany('App\Product', 'type_id', 'id');
           }
    
}
