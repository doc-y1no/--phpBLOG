<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class AddController extends Controller
{
// 投稿を保存
public function add(Request $request) {
    return view('add.add');
    // 検証
    $request->validate([
        'title' => 'required',
        'create_time',
        'text' => 'required',
    ]);

    $blog = new Post;

    $blog->title = $request->title;
    $blog->text = $request->text;

    $blog->save();
    return redirect()->route('index')->with('success', 'Post created successfully.');
    }
    public function create()
    {
        return view('add.create');
    }
    // 参考用
public function store(Request $request)
{
  $task_name = $request->input('task_name');
  dd($task_name);
}
}
