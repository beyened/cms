<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
//        return Post::all();
//        $posts = Post::all();
//        $posts = Post::latest()->get(); // get the latest post
        $posts = Post::orderBy('id', 'asc')->get();

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {


        // Validation
//        $this->validate($request,[
//            'title'=> 'required|max:5',
//            'body'=> 'required'
//        ]);

        //
//        return $request->all();
//        return $request->get('title');
//        return $request->title;

//        Post::create($request->all());

        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = $request->user_id;

        $result = $post->save();

        if ($request){
//            echo "success";
            return redirect('/posts');
        }else{
            echo "Error";
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $post = Post::find($id);
//        return $post;
        return view('posts.show', compact('post'));
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

        $post = Post::findOrFail($id);

        return view('posts.edit', compact('post'));
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
//        $post = new Post;
//        $post->title = $request->title;
//        $post->body = $request->body;
//        $post->user_id = $request->user_id;
//
//        $result = $post->save();

        $posts = Post::find($id);
//        return $posts;
        $result = $posts->update($request->all());
//
        if ($result){
//            echo "success";
            return redirect('/posts');
        }else{
            echo "Error";
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // Soft delete
//    $post = Post::find($id);
//    $post->delete();
//          OR
//    Post::find($id)->delete();
//          OR
//    Post::where('id', '=', $id)->delete();
//          OR
      Post::destroy($id);

//    return redirect('/posts');
//          OR
    return redirect()->route('posts.index')->with('status','Post Deleted');

    }
}
