<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Project</title>
</head>

<body>
    <h1>Project Name</h1>
    <form action="/projects" method="POST">
        @csrf
        <div class="name">
            <h2>プロジェクト名</h2>
            <input type="text" name="name" placeholder="タイトル" value="{{ old('project.name') }}" />
            <p class="name__error" style="color:red">{{ $errors->first('project.name') }}</p>
        </div>

        <input type="submit" value="保存" />
    </form>
    <div class="back">[<a href="/">back</a>]</div>
</body>

</html>