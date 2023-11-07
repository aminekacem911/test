<?php

namespace Multilingual\Translation\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Group extends Model
{
    protected $table = 'groups';

    /**
     * @return BelongsTo
     */
    public function section(): BelongsTo
    {
        return $this->BelongsTo(Section::class);
    }

    public function group(): BelongsTo
    {
        return $this->BelongsTo(Group::class);
    }

    /**
     * @return HasMany
     */
    public function groups(): HasMany
    {
        return $this->hasMany(Group::class);
    }

    /**
     * @return HasMany
     */
    public function keys(): HasMany
    {
        return $this->hasMany(Key::class);
    }
}
