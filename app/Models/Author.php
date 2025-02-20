<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public $table = 'authors';

    public $fillable = [
        'full_name',
        'bio',
        'date_of_birth',
        'nationality'
    ];

    protected $casts = [
        'full_name' => 'string',
        'bio' => 'string',
        'date_of_birth' => 'datetime',
        'nationality' => 'string'
    ];

    public static array $rules = [
        'full_name' => 'nullable|string|max:100',
        'bio' => 'nullable|string|max:600',
        'date_of_birth' => 'nullable',
        'nationality' => 'nullable|string|max:100',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function books(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Book::class, 'author_id');
    }

    public function resources(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Resource::class, 'author_id');
    }
}
