<?php

namespace Multilingual\Translation\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Key extends Model
{
    protected $table = 'keys';

    /**
     * @return BelongsTo
     */
    public function group(): BelongsTo
    {
        return $this->BelongsTo(Group::class);
    }

    /**
     * @return HasMany
     */
    public function translations(): HasMany
    {
        return $this->HasMany(KeyLanguage::class);
    }
}
