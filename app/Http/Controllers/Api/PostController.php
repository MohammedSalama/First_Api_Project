<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostsResource;
use Illuminate\Support\Facades\Validator;
use App\Models\Posts;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class PostController extends Controller
{
    use ApiResponseTrait;

    public function index()
    {
        $posts = PostsResource::collection(Posts::get());

        return $this->apiResponse($posts,'Ok',200);
    }

    public function show($id)
    {
        $posts = Posts::find($id);

            if($posts)
            {
                return $this->apiResponse(new PostsResource($posts),'Ok',200);
            }
                return $this->apiResponse(null,'The Post Not Found',404);
    }

    public function store(Request $request)
    {
        // Start Validations

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->apiResponse(null,$validator->errors(),400);
        }

        // End Validations

        $posts = Posts::create($request->all());

        if($posts){
            return $this->apiResponse(new PostsResource($posts),'The post Saved',201);
        }

        return $this->apiResponse(null,'The post Not Save',400);
    }

    public function update(Request $request ,$id)
    {

        $validator = Validator::make($request->all(),
        [
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->apiResponse(null,$validator->errors(),400);
        }

        $posts =Posts::find($id);

        if(!$posts){
            return $this->apiResponse(null,'The post Not Found',404);
        }

        $posts->update($request->all());

        if($posts){
            return $this->apiResponse(new PostsResource($posts),'The post update',201);
        }

    }

    public function destroy($id)
    {
        $posts =Posts::find($id);

        if(!$posts){
            return $this->apiResponse(null,'The post Not Found',404);
        }

        $posts->delete($id);

        if($posts){
            return $this->apiResponse(null,'The post deleted',200);
        }
    }


}