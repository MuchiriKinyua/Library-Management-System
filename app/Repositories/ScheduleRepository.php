<?php

namespace App\Repositories;

use App\Models\Schedule;
use App\Repositories\BaseRepository;

class ScheduleRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'staff_id',
        'book_id',
        'member_id',
        'schedule_type',
        'start_time',
        'end_time',
        'status',
        'notes'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Schedule::class;
    }
}
