<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JournalEditorialBoard extends Model
{
    protected $guarded = [];

    /**
     * Get the journal_editorial_board_type that owns the JournalEditorialBoard
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function journal_editorial_board_type(): BelongsTo
    {
        return $this->belongsTo(JournalEditorialBoardType::class);
    }
}
