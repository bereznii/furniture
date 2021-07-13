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
                <h3>Информация о проекте</h3>
                <div class="form-group">
                    <label for="name">Название проекта</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}" aria-describedby="nameHelp">
                    <small id="nameHelp" class="form-text text-muted">Необязательно</small>
                </div>
                <div class="form-group">
                    <label for="description">Описание</label>
                    <textarea name="description" class="form-control rich" id="description" rows="15" aria-describedby="descriptionHelp">
                        {!! old('description') !!}
                    </textarea>
                    <small id="descriptionHelp" class="form-text text-muted">Необязательно</small>
                </div>
                <h3>Фотографии</h3>
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
                <h3>Мета данные</h3>
                <div class="form-group">
                    <label for="name">Заголовок страницы</label>
                    <input name="meta_title" value="{{ old('meta_title') }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Ключевые слова</label>
                    <textarea name="meta_keywords" rows="7" class="form-control">{{ old('meta_keywords') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="name">Описание</label>
                    <textarea name="meta_description" rows="7" class="form-control">{{ old('meta_description') }}</textarea>
                </div>
                <hr>
                <button type="submit" class="btn btn-success">Сохранить</button>
            </form>
        </div>
    </div>
@endsection
