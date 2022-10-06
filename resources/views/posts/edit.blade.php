<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Create Posts</title>
</head>
<body>
<a href="{{route('posts.index')}}">Go To Index Page</a><br>
    <form action="{{route('posts.update', $post->id)}}" method="post">
        @csrf
        @method('PUT')
        Title: <input type="text" name="title" value="{{$post->title}}"> <br><br>

        Category:
        <select name="category_id">
            @foreach($categories as $cat)
                <option @if($cat->id == $post->category_id) selected @endif value="{{$cat->id}}">{{$cat->name}}</option>
            @endforeach
        </select><br><br>


        Content: <textarea name="content" cols="30" rows="10">{{$post->content}}</textarea><br><br>
        <button type="submit">Update Post</button>
    </form>
</body>
</html>
