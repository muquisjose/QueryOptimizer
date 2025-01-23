<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mot_credito extends Model
{
    use HasFactory;

    protected $table = 'mot_creditos';

    protected $primaryKey = 'id';

    protected $guarded = [];

    public $timestamps = true;
}
