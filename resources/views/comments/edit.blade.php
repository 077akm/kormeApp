<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Create Posts</title>
</head>
<body>
<a href="{{route('posts.index')}}">Go To Index Page</a><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form action="{{route('comments.update',$comment->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="titleInput">Text</label><br>
                        <input type="text" class="form-control" id="titleInput" name="text" placeholder="Enter text" value="{{$comment->text}}">
                        <div class="invalid-feedback"></div>
                        <button class="btn btn-outline-secondary" type="submit">UPDATE </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
