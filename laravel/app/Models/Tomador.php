<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tomador extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'cidade', 'estado'
    ];

    public function subtomadores() {
        return $this->hasMany(Subtomador::class);
    }

    public function funcionarios() {
        return $this->hasMany(Funcionario::class);
    }
}