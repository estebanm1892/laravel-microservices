<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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

    public function index()
    {
        $authors = Author::all();
        return $this->successResponse($authors);
    }

    /**
     * Create a new author
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|max:255',
            'gender' => 'required|max:255|in:male,female',
            'country' => 'required|max:255',
        ];

        $this->validate($request, $rules);

        $author = Author::create($request->all());

        return $this->successResponse($author, Response::HTTP_CREATED);
    }

    /**
     * Return a specific author
     *
     * @param int $author
     * @return \Illuminate\Http\JsonResponse
     */

    public function show($author)
    {
        $author = Author::findOrFail($author);
        return $this->successResponse($author);
    }

    /**
     * Update a specific author
     *
     * @param \Illuminate\Http\Request $request
     * @param int $author
     * @return \Illuminate\Http\JsonResponse
     */

    public function update(Request $request, $author)
    {
        $rules = [
            'name' => 'max:255',
            'gender' => 'max:255|in:male,female',
            'country' => 'max:255',
        ];

        $this->validate($request, $rules);

        $author = Author::findOrFail($author);

        $author->fill($request->all());

        if ($author->isClean()) {
            return $this->errorResponse('At least one value must change', Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $author->save();

        return $this->successResponse($author);
    }

    /**
     * Delete a specific author
     *
     * @param int $author
     * @return \Illuminate\Http\JsonResponse
     */

    public function destroy($author) {

        $author = Author::findOrFail($author);

        $author->delete();

        return $this->successResponse($author);
    }
}
