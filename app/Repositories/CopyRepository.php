<?php

namespace App\Repositories;

use App\Models\Copy;
use App\Repositories\BaseRepository;

class CopyRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'book_id',
        'shelf_location',
        'barcode',
        'status',
        'book_condition',
        'added_by'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Copy::class;
    }
}
