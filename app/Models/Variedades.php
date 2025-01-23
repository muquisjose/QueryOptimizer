<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variedades extends Model
{
    use HasFactory;

    protected $table = 'variedades';

    protected $primaryKey = 'id';

    protected $guarded = [];

    public $timestamps = true;

    public function flores()
    {
        return $this->belongsTo('App\Models\Flores', 'id_flor');
    }
}
