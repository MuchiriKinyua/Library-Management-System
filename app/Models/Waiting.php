<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Waiting extends Model
{
    public $table = 'waitings';

    public $fillable = [
        'book_id',
        'member_id',
        'position',
        'status'
    ];

    protected $casts = [
        'status' => 'string'
    ];

    public static array $rules = [
        'book_id' => 'nullable',
        'member_id' => 'nullable',
        'position' => 'nullable',
        'status' => 'nullable|string|max:20',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function book(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Book::class, 'book_id');
    }

    public function member(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Member::class, 'member_id');
    }
}
