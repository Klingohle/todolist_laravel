<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/papercss@1.8.3/dist/paper.min.css">
    <title>Todos</title>
</head>
<body>
    <nav class="border fixed split-nav">
        <div class="collapsible">
            <ul class="inline">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/todos') }}">Todos</a></li>
            </ul>
        </div>
      </nav>
