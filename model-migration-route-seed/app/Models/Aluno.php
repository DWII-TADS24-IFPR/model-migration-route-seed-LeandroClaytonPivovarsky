<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aluno extends Model
{
    use SoftDeletes;

    /**
     * Get the user that owns the Aluno
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the curso that owns the Aluno
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

    /**
     * Get the turma that owns the Aluno
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function turma()
    {

        return $this->belongsTo(Turma::class);
    }
}
