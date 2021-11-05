<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = "username";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $keyType = "string";
}
