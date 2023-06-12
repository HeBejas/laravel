<?php

namespace App\Http\Controllers;

use App\Models\Comments;

class Comment extends Controller
{
    public function index(){
        $comments = Comments::orderBy('id', 'ASC')->get();
        return view('test.comments.index', compact('comments'));
    }
    public function about() {
        return view('test.comments.about');
    }
    public function contacts() {
        return view('test.comments.contacts');
    }
    public function create() {
        return view('test.comments.create');
    }
    public function store() {
        $data = request()->validate([
            'author' => 'string',
            'content' => 'string',
            'date' => 'string',
        ]);
        Comments::create($data);
        return redirect()->route('comments.index');
    }
    public function show(Comments $comment) {
        return view('test.comments.show', compact('comment'));
    }
    public function edit(Comments $comment) {
        return view('test.comments.edit', compact('comment'));
    }

    public function update(Comments $comment) {
        $data = request()->validate([
            'author' => 'string',
            'content' => 'string',
            'date' => 'string'
        ]);
        $comment->update($data);
        return redirect()->route('comments.show', $comment->id);
    }
    public function destroy(Comments $comment) {
        $comment->delete();
        return redirect()->route('comments.index');
    }

    public function props() {
        $commentsArr  = [
            [
                'author' => 'Олег',
                'content' => 'Всем  привет!',
                'date' => '6.6.2023',
             ],
            [
                'author' => 'Артем',
                'content' => 'Здарова',
                'date' => '6.6.2023',
             ],
            [
                'author' => 'Влад',
                'content' => 'Как у кого дела?',
                'date' => '6.6.2023',
             ],
            [
                'author' => 'Олег',
                'content' => 'Все хорошо',
                'date' => '6.6.2023',
             ],
        ];
        foreach($commentsArr as $comment){
            Comments::create($comment);
        }
        return redirect()->route('comments.index');
    }
}
