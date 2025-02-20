<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fine extends Model
{
    public $table = 'fines';

    public $fillable = [
        'member_id',
        'borrowing_id',
        'amount',
        'reason',
        'status'
    ];

    protected $casts = [
        'amount' => 'string',
        'reason' => 'string',
        'status' => 'string'
    ];

    public static array $rules = [
        'member_id' => 'nullable',
        'borrowing_id' => 'nullable',
        'amount' => 'nullable|string|max:100',
        'reason' => 'nullable|string|max:600',
        'status' => 'nullable|string|max:20',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function borrowing(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Borrowing::class, 'borrowing_id');
    }

    public function member(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Member::class, 'member_id');
    }
}
