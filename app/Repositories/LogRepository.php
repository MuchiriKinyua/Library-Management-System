<?php

namespace App\Repositories;

use App\Models\Log;
use App\Repositories\BaseRepository;

class LogRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'user_id',
        'action',
        'description'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Log::class;
    }
}
