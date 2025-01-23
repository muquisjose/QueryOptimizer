<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preparas extends Model
{
    use HasFactory;

    protected $table = 'preparas';

    protected $primaryKey = 'id';

    protected $guarded = [];

    public $timestamps = true;
}
