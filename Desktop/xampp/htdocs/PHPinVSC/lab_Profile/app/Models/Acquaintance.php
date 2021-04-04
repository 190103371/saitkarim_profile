<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acquaintance extends Model
{
   
    protected $table = 'acquaintance';
    protected $fillable = ['name', 'surname', 'email', 'img'];
}
