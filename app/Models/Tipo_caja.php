<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo_caja extends Model
{
    use HasFactory;

    protected $table = 'tipo_cajas';

    protected $primaryKey = 'id';

    protected $guarded = [];

    public $timestamps = true;
}
