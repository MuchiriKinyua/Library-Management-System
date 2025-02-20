<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class External extends Model
{
    public $table = 'externals';

    public $fillable = [
        'full_name',
        'api_url',
        'api_key',
        'status'
    ];

    protected $casts = [
        'full_name' => 'string',
        'api_url' => 'string',
        'api_key' => 'string',
        'status' => 'string'
    ];

    public static array $rules = [
        'full_name' => 'nullable|string|max:100',
        'api_url' => 'nullable|string|max:255',
        'api_key' => 'nullable|string|max:600',
        'status' => 'nullable|string|max:20',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
