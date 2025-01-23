<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bodegas extends Model
{
    use HasFactory;

    protected $table = 'bodegas';

    protected $primaryKey = 'id';

    protected $guarded = [];

    public $timestamps = true;
}
