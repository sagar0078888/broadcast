<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class citymodel extends Model
{
    use HasFactory;

    protected $table='city';
    public $timestamps=FALSE;
}
