<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Request;

class ExampleController extends Controller
{
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
