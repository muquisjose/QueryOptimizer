<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoEmpaques extends Model
{
    use HasFactory;

    protected $table = 'tipo_empaques';

    protected $primaryKey = 'id';

    protected $guarded = [];

    public $timestamps = true;
}
