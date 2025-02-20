<?php

namespace App\Repositories;

use App\Models\Publisher;
use App\Repositories\BaseRepository;

class PublisherRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'full_name',
        'contact_info'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Publisher::class;
    }
}
