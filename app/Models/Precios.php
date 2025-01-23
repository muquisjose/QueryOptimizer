<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Precios extends Model
{
    use HasFactory;

    protected $table = 'precios';

    protected $primaryKey = 'id';

    protected $guarded = [];

    public $timestamps = true;

    public function clientes()
    {
        return $this->belongsTo('App\Models\Clientes', 'id_cliente');
    }

    public function variedades()
    {
        return $this->belongsTo('App\Models\Variedades', 'id_variedad');
    }
}
