<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Post;
use Evey\Transformers\PostTransformer;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;

class PostsController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = Post::all();
        $paginator = Post::paginate(9);
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        if(!$post)
            return $this->respondNotFound('Post Not Found');

        $data = fractal()
            ->item($post) 
            ->transformWith(new PostTransformer)
            ->includeUser()
            ->includeCategories()
            ->toArray();

        return $this->respond($data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
