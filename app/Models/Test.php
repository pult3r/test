<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Test extends Model
{
    /** @use HasFactory<\Database\Factories\TestFactory> */
    use HasUuids, HasFactory;

    protected $table = 'tests';

    protected $fillable = 
        [
            'id',
            'title', 
            'content'
        ];
}
