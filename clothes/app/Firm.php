<?php

namespace App;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class Firm extends Model
{
    
    use Searchable;
    protected $table = 'firm';
    public $timestamps = false;

    public function product(){
    	return $this->hasMany('App\Product', 'FirmId', 'firmId');
    }
    
}
