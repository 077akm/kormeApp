<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>All Posts</title>
</head>
<body>

    <a href="{{route('posts.create')}}">Go To Create Page</a>

    <br><hr>
    @foreach($categories as $cat)
        <a href="{{route('posts.category', $cat->id)}}">{{$cat->name}}</a>

    @endforeach





    @foreach($posts as $post)
        <a href="{{route('posts.show', $post->id)}}"><h3>{{$post->title}}</h3></a>
        <p>{{$post->content}}</p>

        <form action="{{route('posts.destroy', $post->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">DELETE</button>


        </form>


    @endforeach

</body>
</html>