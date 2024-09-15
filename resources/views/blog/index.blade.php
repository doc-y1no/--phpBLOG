<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>blog</title>
    @extends('layouts.common')
</head>
@section('title', '新規作成')
@section('content')
<body class="max-w-max bg-white">
    <div class="container w-full p-10">
    @if ($blogs->isNotEmpty())
        <div class="bg-white font-serif container px-5 mx-auto ml-[50px]">
            <table className="md:table-fixed border-collapse border border-slate-300">
            <caption class="caption-top px-5">
                ブログ一覧
            </caption>
                <th>
                    <tr class="text-center">
                        <td class="border border-slate-600 p-2">ID</td>
                        <td class="border border-slate-600 p-2">タイトル</td>
                        <td class="border border-slate-600 p-2">投稿日</td>
                        <td class="border border-slate-600 p-2">詳細</td>
                    </tr>
                </th>
                <tbody>
                    @foreach ($blogs as $item)
                    <tr>
                        <td class="border border-slate-600 text-center p-2">
                                {{ $item->id }}
                        </td>
                        <td class="border border-slate-600 text-left p-2">
                                {{ $item->title }}
                        </td>
                        <td class="border border-slate-600 text-left p-2">
                                {{ $item->updated_at }}
                        </td>
                        <td class="border text-blue-600 border-slate-600 text-left p-2">
                            <a href="{{route('blog.show',['id'=>$item->id])}}">詳細</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <button class="p-10 bg-slate-700 border-2 h-1 text-center place-content-center">
                <a href="{{ route('add') }}">ブログ追加</a>
            <button class="p-10 bg-slate-700 border-2 h-1 text-center place-content-center">
            <a href="{{ route('blog.create') }}">{{ __('新規作成') }}</a>
        </div>
    @endif
    </div>
</body>
@endsection
