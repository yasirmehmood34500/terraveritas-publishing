<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Journal extends Model
{
    protected $guarded = [];

    /**
     * Get all of the journal_issue_papers for the Journal
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function journal_issue_papers(): HasMany
    {
        return $this->hasMany(JournalIssuePaper::class);
    }
}
