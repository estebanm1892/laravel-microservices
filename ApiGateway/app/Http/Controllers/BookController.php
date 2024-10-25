<?php

namespace App\Http\Controllers;

use App\Services\BookService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Laravel\Lumen\Routing\Controller as BaseController;

class BookController extends BaseController
{

    use ApiResponser;


    /**
     * The service to consume the Books microservice
     * @var BookService
     */

    public $bookService;

    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
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
