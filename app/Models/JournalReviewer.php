<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JournalReviewer extends Model
{
    protected $fillable = [
        'journal_id',
        'name',
        'department',
        'email',
        'official_url',
    ];

    public function journal()
    {
        return $this->belongsTo(Journal::class);
    }
}
