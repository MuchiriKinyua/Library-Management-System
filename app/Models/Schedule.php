<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public $table = 'schedules';

    public $fillable = [
        'staff_id',
        'book_id',
        'member_id',
        'schedule_type',
        'start_time',
        'end_time',
        'status',
        'notes'
    ];

    protected $casts = [
        'schedule_type' => 'string',
        'start_time' => 'datetime',
        'end_time' => 'datetime',
        'status' => 'string',
        'notes' => 'string'
    ];

    public static array $rules = [
        'staff_id' => 'nullable',
        'book_id' => 'nullable',
        'member_id' => 'nullable',
        'schedule_type' => 'nullable|string|max:100',
        'start_time' => 'nullable',
        'end_time' => 'nullable',
        'status' => 'nullable|string|max:20',
        'notes' => 'nullable|string|max:600',
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

    public function staff(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Staff::class, 'staff_id');
    }
}
