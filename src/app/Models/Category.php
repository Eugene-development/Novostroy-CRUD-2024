<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;


class Category extends RootModel
{
    protected $table = 'category';

    public function product(): MorphMany
    {
        return $this->morphMany(Product::class, 'parentable');
    }
    
    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
