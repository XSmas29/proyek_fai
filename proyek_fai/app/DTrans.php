<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DTrans extends Model
{
    use HasFactory;

    protected $table = "dtrans";
    protected $primaryKey = "id";
    public $timestamps = false;
}
