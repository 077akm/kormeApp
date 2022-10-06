<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>All Posts</title>
</head>
<body>

    <a href="{{route('posts.index')}}">Go To Index Page</a>

    <h3>{{$post->title}}</h3>
    <p>{{$post->content}}</p>

    <a href="{{route('posts.edit', $post->id)}}">Edit</a>
    <hr>

    <form action="{{route('comments.store')}}" method="post">
        @csrf
        <textarea name="text" cols="20" rows="2"></textarea>
        <input name="post_id" value="{{$post->id}}" type="hidden">
        <button type="submit">Save</button>
    </form>
    <br><br>
    @foreach($post->comments as $comment)
        <div>
            @if($post->id == $comment->post_id)
             {{$comment->created_at}}<h3>{{$comment->text}}</h3>
        </div>

        <a href="{{route('comments.edit', $comment)}}">Edit</a><br>
        <form action="{{route('comments.destroy', $comment)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">DELETE</button>


        </form>
        @endif
    @endforeach



</body>
</html>
