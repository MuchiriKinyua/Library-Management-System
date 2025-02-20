<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    public $table = 'borrowings';

    public $fillable = [
        'member_id',
        'book_copy_id',
        'issued_by',
        'issue_date',
        'due_date',
        'return_date',
        'status'
    ];

    protected $casts = [
        'issued_by' => 'string',
        'issue_date' => 'date',
        'due_date' => 'date',
        'return_date' => 'date',
        'status' => 'string'
    ];

    public static array $rules = [
        'member_id' => 'nullable',
        'book_copy_id' => 'nullable',
        'issued_by' => 'nullable|string|max:100',
        'issue_date' => 'nullable',
        'due_date' => 'nullable',
        'return_date' => 'nullable',
        'status' => 'nullable|string|max:20',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function member(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Member::class, 'member_id');
    }

    public function fines(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Fine::class, 'borrowing_id');
    }
}
