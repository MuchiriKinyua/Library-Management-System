<?php

namespace App\Repositories;

use App\Models\Report;
use App\Repositories\BaseRepository;

class ReportRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'report_type',
        'generated_by',
        'start_date',
        'summary',
        'total_borrows_returned',
        'total_books_borrowed',
        'total_fines_collected',
        'end_date',
        'most_borrowed book',
        'report_data'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Report::class;
    }
}
