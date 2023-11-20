<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//model que fará a coneão com o db atrável do ELOQUENT.
class Car extends Model
{
    use HasFactory;
    protected $casts = ['itens' => 'array'] ;
    protected $dates = ['date'];
    //aqui indica que o relacionamento da tabela cars com a tabela users é de 1 pra 1 belongsTo; Model/User. 
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

}