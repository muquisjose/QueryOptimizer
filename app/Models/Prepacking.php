<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prepacking extends Model
{
    use HasFactory;

    protected $table = 'prepackings';

    protected $primaryKey = 'id';

    protected $guarded = [];

    public $timestamps = true;

}
