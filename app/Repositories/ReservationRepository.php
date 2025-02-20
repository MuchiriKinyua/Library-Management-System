<?php

namespace App\Repositories;

use App\Models\Reservation;
use App\Repositories\BaseRepository;

class ReservationRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'member_id',
        'book_id',
        'reservation_date',
        'status'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Reservation::class;
    }
}
