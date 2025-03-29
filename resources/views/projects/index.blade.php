<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>参加しているプロジェクト一覧</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>

<body>
    <h1>参加しているプロジェクト一覧</h1>
    <a href='/projects/create'>プロジェクトを新規作成</a>
    <div class='projects'>
        @foreach ($projects as $project)
        <div class='project'>
            <h2 class='name'>
                <a href="/projects/{{ $project->id }}">{{ $project->name }}</a>
            </h2>
        </div>
        @endforeach
    </div>
    <div class='paginate'>
        {{ $projects->links() }}
    </div>
</body>

</html>