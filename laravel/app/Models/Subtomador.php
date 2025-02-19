<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtomador extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'cidade', 'estado', 'tomador_id'
    ];

    public function tomador() {
        return $this->belongsTo(Tomador::class);
    }

    public function funcionarios() {
        return $this->hasMany(Funcionario::class);
    }
}