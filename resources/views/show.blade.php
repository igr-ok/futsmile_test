@include('partials/header')

<div class="ml-5 mt-3">
<ul class="nav navbar-nav navbar-right">         
    <li id="home"><a href="{{ route('posts.index') }}">Главная</a></li>
    <li id="create"><a href="{{ route('posts.create') }}">Добавить</a></li>
    <li id="update"><a href="{{ route('posts.edit', $post->id) }}">Редактировать</a></li>
    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Удалить" class="btn btn-danger">
    </form>
    
</ul>

<div>
    <div>{{ $post->text }}</div>
</div>
</div>
