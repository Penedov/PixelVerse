<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = 'produto';

    public $fillable = ['idproduto','nome','quantidade','categoria','valor','mrca','datafabricacao'];

    public $timestamps = false;  

}
