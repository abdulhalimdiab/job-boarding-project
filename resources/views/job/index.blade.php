<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Job 1</h1>
<h1>Job 2</h1>
<h1>Job 3</h1>

<h3>
    @foreach($jobs as $job)
        <div>{{$job['title']}}</div>
        <div>{{$job['salary']}}</div>

    @endforeach
</h3>
</body>
</html>
