@extends('admin.home')

@section('main')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route("home") }}">Главная</a></li>
            <li class="breadcrumb-item"><a href="{{ route("admin.{$category}") }}">{{ $categoryName }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">Добавить</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('admin.projects.store', ['category' => $category]) }}" method="POST" enctype='multipart/form-data'>
                @csrf
                <input type="hidden" name="category" value="{{ $category }}">
                <div class="form-group">
                    <label for="name">Название проекта</label>
                    <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp">
                    <small id="nameHelp" class="form-text text-muted">Необязательно</small>
                </div>
                <div class="form-group">
                    <label for="description">Описание</label>
                    <input type="text" name="description" class="form-control" id="description" aria-describedby="descriptionHelp">
                    <small id="descriptionHelp" class="form-text text-muted">Необязательно</small>
                </div>
                <hr>
                <div class="form-group">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <td>
                                    <b>Фоновое изображение *</b>
                                    <br>
                                    <small id="nameHelp" class="form-text text-muted">Обязательно</small>
                                </td>
                                <td>
                                    <input name="backgroundImage" type="file" id="primaryFile" onchange="document.getElementById('image1').src = window.URL.createObjectURL(this.files[0])">
                                </td>
                                <td>
                                    <img id="image1" width="300">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Главное изображение *</b>
                                    <br>
                                    <small id="nameHelp" class="form-text text-muted">Обязательно</small>
                                </td>
                                <td>
                                    <input name="primaryImage" type="file" id="primaryFile" onchange="document.getElementById('image2').src = window.URL.createObjectURL(this.files[0])">
                                </td>
                                <td>
                                    <img id="image2" width="300">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <b>Дополнительные фото</b>
                                    <br>
                                    <small id="nameHelp" class="form-text text-muted">Необязательно</small>
                                </td>
                            </tr>
                            @foreach(range(1,10) as $image)
                                <tr>
                                    <td>
                                        <b>#{{ $image }}</b>
                                    </td>
                                    <td>
                                        <input name="secondaryImage[image{{ $image }}]" type="file" onchange="document.getElementById('secondaryImage{{ $image }}').src = window.URL.createObjectURL(this.files[0])">
                                    </td>
                                    <td>
                                        <img id="secondaryImage{{ $image }}" width="300">
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                <hr>
                <button type="submit" class="btn btn-success">Сохранить</button>
            </form>
        </div>
    </div>
@endsection
