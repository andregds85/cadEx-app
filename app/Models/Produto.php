<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $table="produtos";
    protected $fillable = [
      'nome',
      'preco',
      'quantidade',
      'gestante',
      'nasceDestino',
      'acessoVenosoCentral',
      'avcOnde',
      'Contato',
      'motivoContato',
      'respiratoria',
      'motivoRespiratoria',
   ];

}







