<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class game extends Model
{
    protected $fillable = ['name', 'productor', 'exit_year', 'price'];
}
