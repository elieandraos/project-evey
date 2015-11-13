<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Category;
use Evey\Transformers\CategoryTransformer;
use Evey\Transformers\PostTransformer;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;

class CategoriesController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        $data = fractal()
            ->collection($categories)
            ->transformWith( new CategoryTransformer)
            ->toArray();

        return $this->respond($data);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);

        $paginator = $category->posts()->paginate(9);
        $posts = $paginator->getCollection();

        $data = fractal()
            ->collection($posts)
            ->transformWith( new PostTransformer)
            ->includeUser()
            ->includeCategories()
            ->paginateWith(new IlluminatePaginatorAdapter($paginator))
            ->toArray();

        return $this->respond($data);
    }
}
