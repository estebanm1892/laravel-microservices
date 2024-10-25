<?php

namespace App\Http\Controllers;

use App\Services\AuthorService;
use App\Services\BookService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Laravel\Lumen\Routing\Controller as BaseController;

class BookController extends BaseController
{

    use ApiResponser;


    /**
     * The service to consume the books microservice
     * @var BookService
     */

    public $bookService;

    /**
     * The service to consume the authors microservice
     * @var AuthorService
     */

    public $authorService;

    public function __construct(BookService $bookService, AuthorService $authorService)
    {
        $this->bookService = $bookService;
        $this->authorService = $authorService;
    }


    public function index()
    {
        return $this->successResponse($this->bookService->obtainBooks());
    }

    /**
     * Create an instance of Book
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function store(Request $request)
    {
        $this->authorService->obtainAuthor($request->author_id);

        return $this->successResponse($this->bookService->createBook($request->all(), Response::HTTP_CREATED));
    }

    /**
     * Obtain and show an Book
     *
     * @param $book
     * @return \Illuminate\Http\JsonResponse
     */

    public function show($book)
    {
        return $this->successResponse($this->bookService->obtainBook($book));
    }

    /**
     * Update an Book
     *
     * @param \Illuminate\Http\Request $request
     * @param $book
     * @return \Illuminate\Http\JsonResponse
     */

    public function update(Request $request, $book)
    {
        return $this->successResponse($this->bookService->editBook($request->all(), $book));
    }

    /**
     * Remove an Book
     *
     * @param $book
     * @return \Illuminate\Http\JsonResponse
     */

    public function destroy($book)
    {
        return $this->successResponse($this->bookService->deleteBook($book));
    }
}
