<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $table = 'books';

    public $fillable = [
        'category_id',
        'author_id',
        'publisher_id',
        'title',
        'language',
        'publication_year',
        'edition',
        'cover_image',
        'status'
    ];

    protected $casts = [
        'title' => 'string',
        'language' => 'string',
        'publication_year' => 'string',
        'edition' => 'string',
        'cover_image' => 'string',
        'status' => 'string'
    ];

    public static array $rules = [
        'category_id' => 'nullable',
        'author_id' => 'nullable',
        'publisher_id' => 'nullable',
        'title' => 'nullable|string|max:255',
        'language' => 'nullable|string|max:100',
        'publication_year' => 'nullable|string|max:20',
        'edition' => 'nullable|string|max:20',
        'cover_image' => 'nullable|string|max:255',
        'status' => 'nullable|string|max:20',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function publisher(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Publisher::class, 'publisher_id');
    }

    public function author(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Author::class, 'author_id');
    }

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Category::class, 'category_id');
    }

    public function copies(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Copy::class, 'book_id');
    }

    public function reservations(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Reservation::class, 'book_id');
    }

    public function waitings(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Waiting::class, 'book_id');
    }
}
