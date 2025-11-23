<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JournalIssuePaper extends Model
{
    protected $guarded = [];

    /**
     * Get the journal that owns the JournalIssuePaper
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function journal(): BelongsTo
    {
        return $this->belongsTo(Journal::class);
    }
    public function journal_archive_volume(): BelongsTo
    {
        return $this->belongsTo(JournalArchiveVolume::class);
    }
    public function journal_archive_issue(): BelongsTo
    {
        return $this->belongsTo(JournalArchiveIssue::class);
    }
}
