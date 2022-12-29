<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $connection = 'db_sample';
    protected $table = 'msemployee';
    use HasFactory;
}
