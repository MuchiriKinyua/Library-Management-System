<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public $table = 'payments';

    public $fillable = [
        'member_id',
        'amount',
        'payment_method',
        'status'
    ];

    protected $casts = [
        'amount' => 'string',
        'payment_method' => 'string',
        'status' => 'string'
    ];

    public static array $rules = [
        'member_id' => 'nullable',
        'amount' => 'nullable|string|max:100',
        'payment_method' => 'nullable|string|max:50',
        'status' => 'nullable|string|max:20',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function member(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Member::class, 'member_id');
    }
}
