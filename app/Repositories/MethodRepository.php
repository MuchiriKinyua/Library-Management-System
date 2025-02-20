<?php

namespace App\Repositories;

use App\Models\Method;
use App\Repositories\BaseRepository;

class MethodRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'full_name'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Method::class;
    }
}
