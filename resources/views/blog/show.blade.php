<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>ブログ{{$blog->title}}</title>
    @extends('layouts.common')
</head>
@section('title', '新規作成')
@section('content')
<div class="bg-green-300">
<h1 class="text-center border border-slate-600 p-4 font-bold">詳細表示</h1>
</div>
<div class="border border-slate-600 text-left p-2">
タイトル
{{$blog->title}}
</div>

<div class="border border-slate-600 text-left p-2">
本文
{{$blog->text}}
</div>

<div class="border border-slate-600 text-left p-2">
投稿日
{{$blog->createtime}}
</div>
<a class="text-blue-600"
    href="{{route('blog.edit',['id'=>$blog->id])}}">{{ __('編集') }}</a>
    <form method="POST" action="{{route('blog.destroy',['id'=>$blog->id])}}">
  @csrf
  <button class="text-red-700" type="submit">削除</button>
</form>
<a class="text-blue-600" href="{{ route('index') }}">{{ __('一覧に戻る') }}</a>
@endsection
