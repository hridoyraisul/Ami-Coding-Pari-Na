<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    use HasFactory;
    protected $table = 'search';
    protected $fillable = [
        'user_id',
        'input_value',
        'search_value',
    ];
    protected $casts = [
        'input_value'=>'array'
    ];
}
