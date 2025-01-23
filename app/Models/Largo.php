<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class largo extends Model
{
    use HasFactory;

    protected $table = 'largos';

    protected $primaryKey = 'id';

    protected $guarded = [];

    public $timestamps = true;
}
