<?php

namespace App\Models;
use App\Models\Subtomador;
use App\Models\Tomador;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model {
    protected $fillable = ['nome', 'cpf', 'data_nascimento', 'tomador_id', 'subtomador_id'];

    public function tomador() {
        return $this->belongsTo(Tomador::class);
    }

    public function subtomador() {
        return $this->belongsTo(Subtomador::class);
    }
}
