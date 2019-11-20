<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @author Tobias Maxham <git2019@maxham.de>
 */
class Product extends Model
{
    protected $fillable = [
        'name', 'price', 'slug', 'description',
    ];
}
