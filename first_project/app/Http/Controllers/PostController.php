<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('post.index', compact('posts'));
//        dd($posts);
    }

    public function create(){
        return view('post.create');
//        $postsArr  = [
//            [
//                'title' => 'titleNEW',
//                'content' => 'NEWcollcontent',
//                'image' => 'Newimagecool',
//                'likes' => 20,
//                'is_published' => 1,
//             ],
//            [
//                'title' => 'another titleNEW',
//                'content' => 'another NEWcollcontent',
//                'image' => 'another Newimagecool',
//                'likes' => 30,
//                'is_published' => 1,
//            ]
//        ];
//        foreach($postsArr as $post){
//            Post::create($post);
//        }
//        dd('created');
    }
    public function store()
    {
        $data = request()->validate([
            'title'   => 'string',
            'content' => 'string',
            'image'   => 'string',
        ]);
        Post::create($data);

        return redirect()->route('post.index');
    }
    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }
    public function edit(Post $post)
    {
        return view ('post.edit',compact('post'));
    }
//    public function show($id)
//    {
//        $post = Post::findOrFail($id);
//        dd($post->title);
//    }
    public function update(Post $post) {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
        ]);
        $post->update($data);
        return redirect()->route('post.show', $post->id);
    }
//    public function update() {
//        $post= Post::find(6);
//        $post->update([
//            'title'=> 'что-то новое'
//        ]);
//        dd('успех');
//    }

    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('post.index');
    }
    public function delete(){
        $post = Post::find(4);
        $post->delete();
        dd('deleted');
    }

    public function firstOrCreate(){

        $anotherPost = [
            'title' => 'someepost',
            'content' => 'someNEWcollcontent',
            'image' => 'someNewimagecool',
            'likes' => 20000,
            'is_published' => 1,
        ];
        $post = Post::firstOrCreate(

            ['title' => 'titleNEW'],
            [
                'title' => 'titleNEW',
                'content' => 'NotNEWcollcontent',
                'image' => 'Newimagecool',
                'likes' => 20,
                'is_published' => 1,
            ]);
        dump($post->content);
        dd('finished');
    }

    public function updateOrCreate(){
        echo 'update';
        $post = Post::updateOrCreate(['title' => 'titleNEW'],
        [
            'title' => 'ВоувоуПолечгче',
        ]);
    }

}
