<?php

namespace Multilingual\Translation\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Platform extends Model
{
    protected $table = 'platforms';

    public function sections(): HasMany
    {
        return $this->hasMany(Section::class);
    }
}
