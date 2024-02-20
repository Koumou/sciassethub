<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Space_request extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'space_request';
}