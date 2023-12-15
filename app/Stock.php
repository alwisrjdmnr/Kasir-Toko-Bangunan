<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    public function pesanan_detail() 
	{
	     return $this->hasMany('App\PesananDetail','stock_id', 'id');
	}
}