<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    private $table="products";

    protected $fillable = [
        'title', 'description', 'price','posted_by', 'image', 'category'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
