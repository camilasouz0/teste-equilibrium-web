<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Telefone extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'telefone',
        'funcionario_id',
    ];
}
