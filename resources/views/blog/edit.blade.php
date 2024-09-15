<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>編集{{$blog->title}}</title>
    @extends('layouts.common')
</head>
@section('title', '新規作成')
@section('content')

<h1>編集</h1>

<form method="POST" action="{{route('blog.update',['id' =>$blog->id])}}">
    @csrf

  <div>
    タイトル
    <input type="text" name=title value="{{$blog->title}}">
    </div>

    <div>
    本文
    <input type="text" name=text value="{{$blog->text}}">
    </div>

    <input class="text-blue-600" type="submit" value="更新する">

    </form>
    <a class="text-blue-600" href="{{route('blog.show',['id'=>$blog->id])}}">{{ __('詳細に戻る') }}</a>
