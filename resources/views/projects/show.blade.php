<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projects</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>

<body>
    <h1 class="name">
        {{ $project->name }}
    </h1>
    <div class="content">
        <div class="content__project">
            <h3>本文</h3>
            <p>{{ $project->body }}</p>
        </div>
    </div>
    <div class="footer">
        <a href="/">戻る</a>
    </div>
</body>

</html>