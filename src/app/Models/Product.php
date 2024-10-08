<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Product extends RootModel
{
    protected $table = 'product';

    public function metaTitle(): MorphOne
    {
        return $this->morphOne(MetaTitle::class, 'parentable');
    }

    public function metaDescription(): MorphOne
    {
        return $this->morphOne(MetaDescription::class, 'parentable');
    }

    public function image(): MorphMany
    {
        return $this->morphMany(Image::class, 'parentable');
    }
    
    public function video(): MorphMany
    {
        return $this->morphMany(Video::class, 'parentable');
    }

    public function price(): MorphOne
    {
        return $this->morphOne(Price::class, 'parentable');
    }
    
    public function unit(): MorphOne
    {
        return $this->morphOne(Unit::class, 'parentable');
    }
    
    public function tag(): MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable')->withTimestamps();
    }
    
    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
