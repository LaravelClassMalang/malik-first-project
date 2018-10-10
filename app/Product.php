<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	/**
	 * table name
	 * @var string
	 */
    protected $table = 'products';

    /**
     * available database field
     * @var array
     */
    protected $fillable = ['category_id' , 'name' , 'price', 'stock', 'description', 'photo'];
    
    public function category() {
        return $this->belongsTo('App\Category');
    }
}
