<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class AuthorController extends BaseController
{

    use ApiResponser;
    /**
     * Return list of authors
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function index() {}

    /**
     * Create an instance of Author
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function store(Request $request) {}

    /**
     * Obtain and show an author
     *
     * @param $author
     * @return \Illuminate\Http\JsonResponse
     */

    public function show($author) {}

    /**
     * Update an author
     *
     * @param \Illuminate\Http\Request $request
     * @param $author
     * @return \Illuminate\Http\JsonResponse
     */

    public function update(Request $request, $author) {}

    /**
     * Remove an author
     *
     * @param $author
     * @return \Illuminate\Http\JsonResponse
     */

    public function destroy($author) {}
}
