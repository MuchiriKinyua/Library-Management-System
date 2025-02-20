<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public $table = 'reports';

    public $fillable = [
        'report_type',
        'generated_by',
        'start_date',
        'summary',
        'total_borrows_returned',
        'total_books_borrowed',
        'total_fines_collected',
        'end_date',
        'most_borrowed book',
        'report_data'
    ];

    protected $casts = [
        'report_type' => 'string',
        'generated_by' => 'string',
        'start_date' => 'datetime',
        'summary' => 'string',
        'total_borrows_returned' => 'string',
        'total_books_borrowed' => 'string',
        'total_fines_collected' => 'string',
        'end_date' => 'datetime',
        'report_data' => 'string'
    ];

    public static array $rules = [
        'report_type' => 'nullable|string|max:100',
        'generated_by' => 'nullable|string|max:50',
        'start_date' => 'nullable',
        'summary' => 'nullable|string|max:600',
        'total_borrows_returned' => 'nullable|string|max:20',
        'total_books_borrowed' => 'nullable|string|max:20',
        'total_fines_collected' => 'nullable|string|max:20',
        'end_date' => 'nullable',
        'most_borrowed book' => 'nullable',
        'report_data' => 'nullable|string|max:600',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function mostBorrowedBook(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Book::class, 'most_borrowed book');
    }
}
