<?php

namespace App\Repositories;

use App\Models\Resource;
use App\Repositories\BaseRepository;

class ResourceRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'author_id',
        'category_id',
        'title',
        'type',
        'access_type',
        'file_url'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Resource::class;
    }
}
