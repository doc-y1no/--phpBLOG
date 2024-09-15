<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ブログ追加</title>

</head>
<body>
  <h1>ブログ追加</h1>
  @csrf
  <div class="form-group">
      <label for="title">Title</label>
      <input type="title" class="form-control" id="title" name="title" required>
  </div>
  <div class="form-group">
      <label for="create_time">日付</label>
      <input type="create_time" class="form-control" id="create_time" name="create_time" required>
  </div>
  <form action="/tasks" method="post" class="mt-10">
  @csrf
  <div class="form-group">
      <label for="text">本文</label>
      <input type="text" class="form-control" id="text" name="text" required>
  </div>
  <button type="submit" class="btn btn-primary">Create Post</button>

  <!-- 試しに追加のポスト　参考用 -->
  <form action="/tasks" method="post" class="mt-10">
  @csrf

  <div class="flex flex-col items-center">
    <label class="w-full max-w-3xl mx-auto">
        <input
            class="block bg-white w-full border border-slate-300 rounded-md py-4 pl-4 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm"
            type="text" name="task_name" />
    </label>

    <button type="submit" class="mt-8 p-4 bg-slate-800 text-white w-full max-w-xs hover:bg-slate-900 transition-colors">
        追加する
    </button>
  </div>

</form>

</body>
</html>
