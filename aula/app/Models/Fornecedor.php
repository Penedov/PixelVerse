<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;

    protected $table = 'fornecedor';

    public $fillable = ['idfornecedor','nome','cnpj','endereço','telefone','celular','email'];

    public $timestamps = false;  
}
