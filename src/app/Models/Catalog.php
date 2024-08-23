<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Catalog extends RootModel
{
    protected $table = 'catalog';

    public function rubric(): MorphMany
    {
        return $this->morphMany(Rubric::class, 'parentable');
    }

    public function text(): MorphOne
    {
        return $this->morphOne(Text::class, 'parentable');
    }
 
}
