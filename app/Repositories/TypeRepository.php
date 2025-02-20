<?php

namespace App\Repositories;

use App\Models\Type;
use App\Repositories\BaseRepository;

class TypeRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'full_name',
        'borrow_limit',
        'duration_in_days',
        'fee'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Type::class;
    }
}
