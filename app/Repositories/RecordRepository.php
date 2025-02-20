<?php

namespace App\Repositories;

use App\Models\Record;
use App\Repositories\BaseRepository;

class RecordRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'member_id',
        'book_copy_id',
        'transaction_type',
        'issued_by',
        'issued_at',
        'due_date',
        'returned_at',
        'fine_amount',
        'fine_status'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Record::class;
    }
}
