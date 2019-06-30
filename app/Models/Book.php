<?php

namespace App\Models;

use App\Filters\Filterable;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use Filterable;

    protected $dates = [
        'purchase_date'
    ];

    public function author()
    {
        return $this->belongsTo('App\Models\Author');
    }
}
