<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    public $table = 'records';

    public $fillable = [
        'member_id',
        'book_copy_id',
        'transaction_type',
        'issued_by',
        'issued_at',
        'due_date',
        'returned_at',
        'fine_amount',
        'fine_status'
    ];

    protected $casts = [
        'transaction_type' => 'string',
        'issued_by' => 'string',
        'issued_at' => 'datetime',
        'due_date' => 'date',
        'returned_at' => 'date',
        'fine_amount' => 'string',
        'fine_status' => 'string'
    ];

    public static array $rules = [
        'member_id' => 'nullable',
        'book_copy_id' => 'nullable',
        'transaction_type' => 'nullable|string|max:100',
        'issued_by' => 'nullable|string|max:100',
        'issued_at' => 'nullable',
        'due_date' => 'nullable',
        'returned_at' => 'nullable',
        'fine_amount' => 'nullable|string|max:20',
        'fine_status' => 'nullable|string|max:20',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function bookCopy(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Copy::class, 'book_copy_id');
    }

    public function member(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Member::class, 'member_id');
    }
}
