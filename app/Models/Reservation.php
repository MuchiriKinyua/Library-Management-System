<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public $table = 'reservations';

    public $fillable = [
        'member_id',
        'book_id',
        'reservation_date',
        'status'
    ];

    protected $casts = [
        'reservation_date' => 'date',
        'status' => 'string'
    ];

    public static array $rules = [
        'member_id' => 'nullable',
        'book_id' => 'nullable',
        'reservation_date' => 'nullable',
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
