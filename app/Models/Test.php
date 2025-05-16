<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'test';

    protected $fillable = ['username', 'password', 'details'];

    protected $casts = ['details' => 'object'];

    public $timestamps = true;
}
