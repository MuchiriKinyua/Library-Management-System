<?php

namespace App\Repositories;

use App\Models\Waiting;
use App\Repositories\BaseRepository;

class WaitingRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'book_id',
        'member_id',
        'position',
        'status'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Waiting::class;
    }
}
