<?php

namespace App\Repositories;

use App\Models\Fine;
use App\Repositories\BaseRepository;

class FineRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'member_id',
        'borrowing_id',
        'amount',
        'reason',
        'status'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Fine::class;
    }
}
