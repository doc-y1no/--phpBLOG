
    <title>新規作成</title>
    @extends('layouts.common')
@section('title', '新規作成')
@section('content')
<h1 class='text-center border border-slate-600 p-4 font-bold'>新規作成</h1>

<form method="POST" action="{{route('blog.store')}}">
  @csrf

  <div class="relative flex border border-slate-600 text-left p-2">
    <label class="inline-flex border border-slate-600" for="form-title">タイトル：</label>
    <input class="inline-flex border border-slate-600" type="text" name="title" id="form-title" required>
  </div>

  <div class="relative flex border border-slate-600 text-left p-2">
    <label class="inline-flex border border-slate-600" for="form-text">本文：</label>
    <textarea class="inline-flex border border-slate-600" name="text" id="form-text" cols="50" rows="5"></textarea>
    <!-- <input class="border border-slate-600" type="textarea"  name="text" id="form-text"> -->
  </div>

  <button class="border text-blue-600 border-slate-600 text-left p-2" type="submit">追加</button>
</form>
<a href="{{ route('index') }}">{{ __('一覧へ戻る') }}</a>
@endsection
