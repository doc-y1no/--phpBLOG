<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\controller\AddController;

class BlogController extends Controller {
    public function index(Request $request)
    { $blogs = Blog::all();
        return view('blog.index', ['blogs' => $blogs]);

        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts.index', ['posts' => $posts]);
    }
    public function create()
    {
    return view('blog/create');
    }
    public function store(Request $request)

    {
        $blog=new Blog;

        $blog->title=$request->input('title');
        $blog->text=$request->input('text');

        $blog->save();

        //一覧表示画面にリダイレクト
        return redirect('/');
    }
    public function show($id)
    {
        $blog = Blog::findOrFail($id);

        return view('blog/show', compact('blog'));
    }
    public function edit($id)
    {
        $blog=Blog::find($id);

        return view('blog/edit', compact('blog'));
    }
    public function update(Request $request, $id)
    {
        $blog=Blog::find($id);

        $blog->title=$request->input('title');
        $blog->text=$request->input('text');

        //DBに保存
        $blog->save();

        //処理が終わったらblog/indexにリダイレクト
        $blog = Blog::findOrFail($id);
        return view('blog/show', compact('blog'));
    }
    public function destroy($id)
    {
        $blog=Blog::find($id);

        $blog->delete();

        return redirect('/');
    }
}
