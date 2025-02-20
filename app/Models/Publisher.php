<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    public $table = 'publishers';

    public $fillable = [
        'full_name',
        'contact_info'
    ];

    protected $casts = [
        'full_name' => 'string',
        'contact_info' => 'string'
    ];

    public static array $rules = [
        'full_name' => 'nullable|string|max:100',
        'contact_info' => 'nullable|string|max:100',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function books(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Book::class, 'publisher_id');
    }
}
