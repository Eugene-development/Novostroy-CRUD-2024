<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;


class Price extends RootModel
{
    protected $table = 'price';
    
    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
