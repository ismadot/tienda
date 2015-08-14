<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

	protected $fillable = ['name', 'slug', 'description', 'extract', 'image', 'visible', 'price', 'category_id'];

    
    // Relation with Category
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
