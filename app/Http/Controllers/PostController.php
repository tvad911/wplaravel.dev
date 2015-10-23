<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $post = \Post::find(1);
        // only all categories and posts connected with it
        // $cat = \Taxonomy::where('taxonomy', 'category')->with('posts')->get();
        // $cat->each(function($category) {
        //     echo $category->name;
        // });
        // $cats = \Taxonomy::category()->posts()->all();
        // dd($post);
        return view('posts.show',compact('post'));
        // return view('posts.show',$post);
        // dd($post);
        // echo '<pre>';
        // var_dump($post);
        // echo '</pre>';
        // $taxonomy = $post->taxonomies()->first();
        // echo $taxonomy->taxonomy;
        //
        // $cat = \Taxonomy::category()->slug('uncategorized')->posts()->first();
        // $cat = \Taxonomy::category()->posts()->get();
        // echo "<pre>"; var_dump($cat); echo "</pre>";

        // only all categories and posts connected with it
        // $cat = \Taxonomy::where('taxonomy', 'category')->with('posts')->get();
        // $cat->each(function($category) {
        //     echo $category->name;
        // });

        // echo $post->post_title;
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

    /**
     * [show description]
     * @param  [type] $slug [description]
     * @return [type]       [description]
     */
    public function slug($slug)
    {
        $post = \Post::type('post')->slug('hello-world')->first();
        $comments = get_approved_comments($post->ID);
        // dd($comments);
        return view('posts.show',compact('post','comments'));
    }
}
