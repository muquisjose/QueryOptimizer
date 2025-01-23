<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fincas extends Model
{
    use HasFactory;

    protected $table = 'fincas';

    protected $primaryKey = 'id';

    protected $guarded = [];

    public $timestamps = true;
}
