<?php

namespace App\Repositories;

use App\Models\Author;
use App\Repositories\BaseRepository;

class AuthorRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'full_name',
        'bio',
        'date_of_birth',
        'nationality'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Author::class;
    }
}
