<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buddy extends Model
{
    protected $table = 'buddys';
    public $timestamps = false;
    protected $fillable = array('cpf', 'id_endereco');
    protected $primaryKey = 'id_buddy';
}
