<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paises extends Model
{
    use HasFactory;

    protected $table = 'paises';

    protected $primaryKey = 'id';

    protected $guarded = [];

    public $timestamps = true;
}
