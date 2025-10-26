<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JournalArchiveIssue extends Model
{
    protected $guarded = [];
    public function journal_archive_year(): BelongsTo
    {
        return $this->belongsTo(JournalArchiveYear::class);
    }
    public function journal(): BelongsTo
    {
        return $this->belongsTo(Journal::class);
    }
}
