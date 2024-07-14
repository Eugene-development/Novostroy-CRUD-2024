<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphTo;


class Rubric extends RootModel
{
    protected $table = 'rubric';
    
    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }

}
