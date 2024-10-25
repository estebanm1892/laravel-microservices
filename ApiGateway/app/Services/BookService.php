<?php

namespace App\Services;

use App\Traits\ConsumeExternalService;

class BookService
{
    use ConsumeExternalService;

    /**
     * The base uri to consume the books service
     * @var string
     */

    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.books.base_uri');
    }

    /**
     * Obtain the full list of Books from the author service
     * @return string
     */

    public function obtainBooks()
    {
        return $this->performRequest('GET', '/books');
    }

    /**
     * Create an instance of author using the author service
     * @param $data
     * @return string
     */

    public function createBook($data)
    {
        return $this->performRequest('POST', '/books', $data);
    }

    /**
     * Obtain a single Book from the Book service
     * @param $book
     * @return string
     */

    public function obtainBook($book)
    {
        return $this->performRequest('GET', "/books/{$book}");
    }

    /**
     * Update an Book using the Book service
     * @param $data
     * @param $book
     * @return string
     */

    public function editBook($data, $book)
    {
        return $this->performRequest('PUT', "/books/{$book}", $data);
    }

    /**
     * Remove a single Book using the Book service
     * @param $book
     * @return string
     */

    public function deleteBook($book)
    {
        return $this->performRequest('DELETE', "/books/{$book}");
    }
}
