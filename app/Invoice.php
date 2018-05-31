<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
      'client_id',
      'total',
      'paid',
      'date_paid'
    ];

    public function scopeFinished($query)
    {
      return $query->where('finished', '=', 1);
    }

    public function scopeDelivered($query)
    {
      return $query->where('delivered', '=', 1);
    }

    public function scopePaid($query)
    {
      return $query->where('paid', '=', 1);
    }

    public function client()
    {
      return $this->hasOne('App\Client', 'id', 'client_id');
    }

    public function items()
    {
      return $this->hasMany('App\InvoiceItem');
    }
}
