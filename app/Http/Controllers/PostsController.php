<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function create(Request $request) {

        $path = $request->file('image')->store('public/img');
        $path = str_replace('public/img', 'storage/img', $path);

        $request->validate([
            'title' => 'required|max:112',
            'text' => 'required|max:512',
            'date' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg'
        ]);

        $post = Post::create([
           'title' => $request->title,
           'text' => $request->text,
           'date' => $request->date,
           'image' => $path,
        ]);

        return redirect()->route('admin.posts.index');
    }

    public function edit(Request $request, Post $post) {
        $params = [
            'title' => $request->title,
            'text' => $request->text,
            'date' => $request->date,
        ];

        if ($request->image) {
            $path = $request->file('image')->store('public/img');
            $params['image'] = str_replace('public/img', 'storage/img', $path);
        }

        $post->update($params);

        return redirect()->route('admin.posts.index');
    }

    public function delete(Post $post) {
        $post->delete();
        return redirect()->route('admin.posts.index');
    }
}
