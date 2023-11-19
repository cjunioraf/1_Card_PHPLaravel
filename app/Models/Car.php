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
}