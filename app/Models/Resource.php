<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    public $table = 'resources';

    public $fillable = [
        'author_id',
        'category_id',
        'title',
        'type',
        'access_type',
        'file_url'
    ];

    protected $casts = [
        'title' => 'string',
        'type' => 'string',
        'access_type' => 'string',
        'file_url' => 'string'
    ];

    public static array $rules = [
        'author_id' => 'nullable',
        'category_id' => 'nullable',
        'title' => 'nullable|string|max:255',
        'type' => 'nullable|string|max:100',
        'access_type' => 'nullable|string|max:20',
        'file_url' => 'nullable|string|max:20',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function author(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Author::class, 'author_id');
    }

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Category::class, 'category_id');
    }
}
