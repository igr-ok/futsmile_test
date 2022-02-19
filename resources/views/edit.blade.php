@include('partials/header')
    <div class="ml-3">
        <ul class="nav navbar-nav navbar-right">         
            <li id="home"><a href="{{ route('posts.index') }}">Главная</a></li>            
        </ul>
        <form class="ml-3 mt-5" action="{{ route('posts.update', $post->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
              <label for="autor_id">autor_id</label>
              <input type="text" name="autor_id" class="form-control" id="autor_id" placeholder="Введите autor_id" value="{{ $post->autor_id }}">              
            </div>
            <div class="form-group">
                <label for="text">Текст нового поста</label>
                <textarea name="text" class="form-control" id="text" placeholder="Введите текст поста">{{ $post->text }}</textarea>
            </div>                 
            <button type="submit" class="btn btn-primary">Редактировать</button>
        </form>
    </div>
</body>
</html>