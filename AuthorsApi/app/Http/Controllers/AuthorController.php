<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponser;
use Illuminate\Http\Client\Request;

class AuthorController extends Controller
{

    use ApiResponser;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Return authors list
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function index() {}

    /**
     * Create a new author
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function store(Request $request) {}

    /**
     * Return a specific author
     *
     * @param int $author
     * @return \Illuminate\Http\JsonResponse
     */

    public function show($author) {}

    /**
     * Update a specific author
     *
     * @param \Illuminate\Http\Request $request
     * @param int $author
     * @return \Illuminate\Http\JsonResponse
     */

    public function update(Request $request, $author) {}

    /**
     * Delete a specific author
     *
     * @param int $author
     * @return \Illuminate\Http\JsonResponse
     */

    public function destroy($author) {}
}
