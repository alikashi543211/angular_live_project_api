<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Option extends Model
{
    use HasFactory;
    /**
     * Get all of the questionnaires for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function questionnaires(): HasMany
    {
        return $this->hasMany(Questionnaire::class, 'option_id', 'id');
    }
}
