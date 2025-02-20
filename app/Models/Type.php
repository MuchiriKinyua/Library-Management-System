<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public $table = 'types';

    public $fillable = [
        'full_name',
        'borrow_limit',
        'duration_in_days',
        'fee'
    ];

    protected $casts = [
        'full_name' => 'string',
        'borrow_limit' => 'string',
        'duration_in_days' => 'string',
        'fee' => 'string'
    ];

    public static array $rules = [
        'full_name' => 'nullable|string|max:100',
        'borrow_limit' => 'nullable|string|max:100',
        'duration_in_days' => 'nullable|string|max:20',
        'fee' => 'nullable|string|max:20',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function members(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Member::class, 'membership_type_id');
    }
}
