<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <example-component></example-component>
        {{-- Пока немного не понял смысл vue в данном конкретном задании.. --}}

    
    <div class="table-responsive col-md-12">
        <table class="table align-items-center table-flush">
            <thead>
            <tr>
                <th class="centered">ФИО<br>Автора</th>
                <th class="centered">Текст<br>поста</th>
                <th class="centered">Дата<br>публикации</th>                
            </tr>
            </thead>
            <tbody>

                @foreach($posts as $post)
                    <tr>
                        <th class="centered">{{$post->hasAutor->about}}</th>
                        {{-- С выводом ФИО пока не разобрался, т.к. у posts и users связь не прямая --}}
                        {{-- может всетаки нужен hasManyThrough... --}}
                        <th class="centered">{{$post->text}}</th>
                        <th class="centered">{{$post->created_at}}</th>


                    </tr>


                @endforeach


            </tbody>
        </table>
    </div>
</div>
</body>
</html>