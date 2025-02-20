<?php

namespace App\Repositories;

use App\Models\Book;
use App\Repositories\BaseRepository;

class BookRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'category_id',
        'author_id',
        'publisher_id',
        'title',
        'language',
        'publication_year',
        'edition',
        'cover_image',
        'status'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Book::class;
    }
}
