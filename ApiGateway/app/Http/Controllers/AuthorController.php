<?php

namespace App\Http\Controllers;

use App\Services\AuthorService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Laravel\Lumen\Routing\Controller as BaseController;

class AuthorController extends BaseController
{

    use ApiResponser;

    /**
     * The service to consume the authors microservice
     * @var AuthorService
     */

    public $authorService;

    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

    /**
     * Return list of authors
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function index()
    {
        return $this->successResponse($this->authorService->obtainAuthors());
    }

    /**
     * Create an instance of Author
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function store(Request $request)
    {
        return $this->successResponse($this->authorService->createAuthor($request->all(), Response::HTTP_CREATED));
    }

    /**
     * Obtain and show an author
     *
     * @param $author
     * @return \Illuminate\Http\JsonResponse
     */

    public function show($author)
    {
        return $this->successResponse($this->authorService->obtainAuthor($author));
    }

    /**
     * Update an author
     *
     * @param \Illuminate\Http\Request $request
     * @param $author
     * @return \Illuminate\Http\JsonResponse
     */

    public function update(Request $request, $author)
    {
        return $this->successResponse($this->authorService->editAuthor($request->all(), $author));
    }

    /**
     * Remove an author
     *
     * @param $author
     * @return \Illuminate\Http\JsonResponse
     */

    public function destroy($author)
    {
        return $this->successResponse($this->authorService->deleteAuthor($author));
    }
}
