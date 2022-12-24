@extends('layouts.adm')

@section('title', 'Create Category')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <form action="{{route('adm.categories.store')}}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="nameInput">Category: </label>
                        <input class="form-control" name="name" type="text">
                    </div>
                    <div class="form-group">
                        <label for="nameenInput">Category English: </label>
                        <input class="form-control" name="name_en" type="text">
                    </div>
                    <div class="form-group">
                        <label for="nameruInput">Категория На Русском : </label>
                        <input class="form-control" name="name_ru" type="text">
                    </div>
                    <div class="form-group">
                        <label for="namekzInput">Санат Қазақша: </label>
                        <input class="form-control" name="name_kz" type="text">
                    </div>

                    <div class="form-group">
                        <label for="codeInput">Code: </label>
                        <input class="form-control" name="code" type="text">
                    </div>
                    <div class="form-group mb-3">
                        <button class="form-control btn-success" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
