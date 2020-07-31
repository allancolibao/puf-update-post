<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('post_cat', 'Presentation')->where('post_year', '2018')->orderBy('post_year', 'ASC')->get();

        return view('index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;
        $post->post_title = $request['post_title'];
        $post->post_description = $request['post_description'];
        $post->post_description2 = $request['post_description2'];
        $post->post_url = $request['post_url'];
        $post->post_cat = $request['post_cat'];
        $post->post_type = $request['post_type'];
        $post->post_survey = $request['post_survey'];
        $post->post_year = $request['post_year'];
        $post->pic_file = $request['pic_file'];
        $post->pdf_path = $request['pdf_path'];
        $post->date_pub = $request['date_pub'];
        $post->status = $request['status'];
        $post->save();

        return redirect()->back()->with('success', 'Successfully inserted!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post, $id)
    {
        $post = Post::where('id', $id)->first();

        return view('edit', compact('post'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post, $id)
    {
        $post = Post::find($id);
        $post->post_title = $request->get("post_title");
        $post->post_description = $request->get("post_description");
        $post->post_description2 = $request->get("post_description2");
        $post->post_url = $request->get("post_url");
        $post->post_cat = $request->get("post_cat");
        $post->post_type = $request->get("post_type");
        $post->post_survey = $request->get("post_survey");
        $post->post_year = $request->get("post_year");
        $post->pic_file = $request->get("pic_file");
        $post->pdf_path = $request->get("pdf_path");
        $post->date_pub = $request->get("date_pub");
        $post->status = $request->get("status");
        $post->save();

        return redirect()->back()->with('success', 'Successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
