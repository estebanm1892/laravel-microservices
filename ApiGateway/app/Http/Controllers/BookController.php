<?php

namespace App\Http\Controllers;

use App\Services\BookService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class BookController extends BaseController
{

    use ApiResponser;


    /**
     * The service to consume the authors microservice
     * @var BookService
     */

    public $bookService;

    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }


    /**
     * Return list of books
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function index() {}

    /**
     * Create an instance of book
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function store(Request $request) {}

    /**
     * Obtain and show an book
     *
     * @param $book
     * @return \Illuminate\Http\JsonResponse
     */

    public function show($book) {}

    /**
     * Update an book
     *
     * @param \Illuminate\Http\Request $request
     * @param $book
     * @return \Illuminate\Http\JsonResponse
     */

    public function update(Request $request, $book) {}

    /**
     * Remove an book
     *
     * @param $book
     * @return \Illuminate\Http\JsonResponse
     */

    public function destroy($book) {}
}
