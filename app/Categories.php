<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    private $table="categories";

    protected $fillable = [
        'name', 'parent'
    ];
}
