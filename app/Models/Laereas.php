<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laereas extends Model
{
    use HasFactory;

    protected $table = 'laereas';

    protected $primaryKey = 'id';

    protected $guarded = [];

    public $timestamps = true;
}
