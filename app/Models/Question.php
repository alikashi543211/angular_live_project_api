<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    use HasFactory;

    /**
     * Get all of the options for the Question
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function options(): HasMany
    {
        return $this->hasMany(Option::class, 'question_id', 'id');
    }

    /**
     * Get the section that owns the Question
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function section(): BelongsTo
    {
        return $this->belongsTo(Section::class, 'section_id', 'id');
    }

    /**
     * Get all of the questionnaires for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function questionnaires(): HasMany
    {
        return $this->hasMany(Questionnaire::class, 'question_id', 'id');
    }

}
