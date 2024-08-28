<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphTo;

class Image extends RootModel
{
    protected $table = 'image';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
