<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>参加しているプロジェクト一覧</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>

<body>
    <div class='projects'>
        @foreach ($projects as $project)
        <div class='project'>
            <h2 class='name'>{{ $project->name }}</h2>
        </div>
        @endforeach
    </div>
</body>

</html>