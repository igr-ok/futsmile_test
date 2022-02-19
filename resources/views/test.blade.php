@include('partials/header')
    <div id="app">
        <example-component></example-component>
        {{-- Пока немного не понял необходимость vue в связке с lar. в данном конкретном задании.. --}}

    
    <div class="table-responsive col-md-12">
        <ul class="nav navbar-nav navbar-right">         
            
            <li id="create"><a href="{{ route('posts.create') }}">Добавить</a></li>          
        </ul>
        <table class="table align-items-center table-flush">
            <thead>
            <tr>
                <th class="centered">Имя<br>Автора</th>
                <th class="centered">Фамилия<br>Автора</th>
                <th class="centered">Текст<br>поста</th>
                <th class="centered">Дата<br>публикации</th>                
            </tr>
            </thead>
            <tbody>
                <div class="d-none">
                    @foreach($autors as $autor)
                    {{$first_name = $autor->userHave->first_name}}                
                    {{$last_name = $autor->userHave->last_name}}
                    @endforeach
                </div>

                @foreach($posts as $post)
                    <tr>
                        <th class="centered">{{$first_name}}</th>
                        <th class="centered">{{$last_name}}</th>                      
                        <th class="centered"><a href="{{ route('posts.show', $post->id) }}">{{$post->text}}</th>
                        <th class="centered">{{$post->created_at}}</th>
                    </tr>


                @endforeach


            </tbody>
        </table>
    </div>
</div>
</body>
</html>