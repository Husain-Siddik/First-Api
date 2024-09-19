<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Log;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = Post::get();

        // Log::info("before loop");
        // foreach ($posts as $post) {
        //     $post['others_info'] = [
        //         "name"=> "rony",
        //     ];
        // }

        return response()->json([
            'massage ' => 'list of posts',
            'posts' => $posts,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $post = new Post();
        $post->titel = $request->title;
        $post->content = $request->Content;
        $post->save();

        return response()->json([
            'massage ' => 'New post Created',
            'posts' => $post,
        ], 200);

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::find($id);

        return response()->json([
            'massage ' => 'list of posts',
            'posts' => $post,
        ], 200);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request,$id)
    {


        Log::info('put method');
        //
        //
        // $post = Post::find($id);

        // $post->titel = $request->title??$post->titel;
        // $post->content = $request->Content??$post->content;
        // $post->save();

        // return response()->json([
        //     'massage ' => 'post updated!!!!',
        //     'posts' => $post,
        // ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
        return response()->Json([
            'massage'=> 'post Succesfully deleted',
            'post'=>$post->delete(),
        ],200);
    }
}
