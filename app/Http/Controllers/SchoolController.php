<?php
namespace App\Http\Controllers;

class SchoolController extends Controller
{
    public function index()
    {
        $query = new \WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 20,
            'order' => 'ASC',
            'orderby' => 'post_title',
        ));

        $posts = $query->get_posts();

        // return View::make('school.index')->with('schools', $posts);
        return response()->json($posts);
    }

    public function about()
    {
        // All published posts
        // $posts = \Post::published()->get();
        // $posts = Post::status('publish')->get();

        // A specific post
        // $post = Post::find(31);
        // echo $post->post_title;
        //
        $post = \Post::find(1);
        $taxonomy = $post->taxonomies()->first();
        echo $taxonomy->taxonomy;

        // return response()->json($posts);
    }
    function meta()
    {
        $post = \Post::find(1);
        // echo $post->meta->link; // OR
        // echo $post->fields->link;
        // var_dump($post->meta->link);
        dd($post);
        echo $post->link; // OR
    }

    function page()
    {
        // Find a page by slug
        $page = \Page::slug('sample-page')->first(); // OR
        // $page = Post::type('page')->slug('about')->first();
        echo $page->post_title;
    }

    function home()
    {
        return view('index');
    }
}