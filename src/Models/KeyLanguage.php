<?php

namespace Multilingual\Translation\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KeyLanguage extends Model
{
    protected $table = 'key_language';

    /**
     * @return BelongsTo
     */
    public function language(): BelongsTo
    {
        return $this->BelongsTo(Language::class);
    }

    /**
     * @return BelongsTo
     */
    public function key(): BelongsTo
    {
        return $this->BelongsTo(Key::class);
    }
}
