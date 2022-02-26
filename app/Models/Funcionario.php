<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Funcionario extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'cpf',
        'nome',
        'carteira_trabalho',
        'setor_id',
        'telefone_id',
    ];

    public function telefones(){
        return $this->hasMany(Telefone::class, 'funcionario_id', 'id');
    }

    public function setor(){
        return $this->belongsTo(Setor::class, 'setor_id', 'id');
    }
}
