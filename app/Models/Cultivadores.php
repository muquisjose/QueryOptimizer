<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cultivadores extends Model
{
    use HasFactory;

    protected $table = 'cultivadores';

    protected $primaryKey = 'id';

    protected $guarded = [];

    public $timestamps = true;
}
