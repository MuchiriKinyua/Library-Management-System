<?php

namespace App\Repositories;

use App\Models\External;
use App\Repositories\BaseRepository;

class ExternalRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'full_name',
        'api_url',
        'api_key',
        'status'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return External::class;
    }
}
