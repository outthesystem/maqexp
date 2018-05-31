<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
  protected $fillable = [
    'invoice_id',
    'product_id',
    'quantity',
    'price',
    'price_total'
  ];

  public function product()
  {
    return $this->hasOne('App\Product', 'id', 'product_id');
  }
}
