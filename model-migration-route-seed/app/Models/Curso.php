<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curso extends Model
{
    use SoftDeletes;
    /**
     * Get all of the aluno for the Curso
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function aluno(): HasMany
    {
        return $this->hasMany(Aluno::class);
    }
}
