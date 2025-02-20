<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    public $table = 'notifications';

    public $fillable = [
        'user_id',
        'message',
        'status'
    ];

    protected $casts = [
        'message' => 'string',
        'status' => 'string'
    ];

    public static array $rules = [
        'user_id' => 'nullable',
        'message' => 'nullable|string|max:600',
        'status' => 'nullable|string|max:20',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
