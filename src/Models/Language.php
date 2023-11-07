<?php

namespace Multilingual\Translation\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Language extends Model
{
    protected $table = 'languages';

    /**
     * @return HasMany
     */
    public function translations(): HasMany
    {
        return $this->HasMany(KeyLanguage::class);
    }
}
