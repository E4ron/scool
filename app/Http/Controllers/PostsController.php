<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function create(Request $request) {
        $path = $request->file('image')->store('public');
        $path = str_replace('public', '/storage', $path);

        $post = Post::create([
           'title' => $request->title,
           'text' => $request->text,
           'image' => $path,
        ]);

        return redirect()->route('admin.posts.index');
    }

    public function edit(Request $request, Post $post) {
        $params = [
            'title' => $request->title,
            'text' => $request->text,
        ];

        if ($request->image) {
            $path = $request->file('image')->store('public');
            $params['image'] = str_replace('public', '/storage', $path);
        }

        $post->update($params);

        return redirect()->route('admin.posts.index');
    }

    public function delete(Post $post) {
        $post->delete();
        return redirect()->route('admin.posts.index');
    }
}
