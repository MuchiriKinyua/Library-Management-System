<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Copy extends Model
{
    public $table = 'copies';

    public $fillable = [
        'book_id',
        'shelf_location',
        'barcode',
        'status',
        'book_condition',
        'added_by'
    ];

    protected $casts = [
        'shelf_location' => 'string',
        'barcode' => 'string',
        'status' => 'string',
        'book_condition' => 'string',
        'added_by' => 'string'
    ];

    public static array $rules = [
        'book_id' => 'nullable',
        'shelf_location' => 'nullable|string|max:100',
        'barcode' => 'nullable|string|max:255',
        'status' => 'nullable|string|max:20',
        'book_condition' => 'nullable|string|max:20',
        'added_by' => 'nullable|string|max:100',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function book(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Book::class, 'book_id');
    }
}
