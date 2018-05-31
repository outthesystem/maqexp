<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
      'category_id',
      'name',
      'description',
      'barcode',
      'quantity',
      'price',
      'image'
    ];

    public function category()
    {
      return $this->hasOne('App\Category', 'id', 'category_id');
    }
}
