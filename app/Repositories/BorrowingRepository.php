<?php

namespace App\Repositories;

use App\Models\Borrowing;
use App\Repositories\BaseRepository;

class BorrowingRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'member_id',
        'book_copy_id',
        'issued_by',
        'issue_date',
        'due_date',
        'return_date',
        'status'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Borrowing::class;
    }
}
