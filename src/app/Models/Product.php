<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Product extends RootModel
{
    protected $table = 'product';

    public function price(): MorphOne
    {
        return $this->morphOne(Price::class, 'parentable');
    }
    
    public function unit(): MorphOne
    {
        return $this->morphOne(Unit::class, 'parentable');
    }
    
    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
