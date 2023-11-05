<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DateTimeInterface;

class Anotacao extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['titulo', 'descricao'];

    protected $table = 'anotacoes';

    // Salvar data formatada no banco
    public function serializeDate(DateTimeInterface $date)
    {
        return $date->format('d/m/Y H:i');
    }

}
