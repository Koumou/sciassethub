<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset_request extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'asset_request';
}
