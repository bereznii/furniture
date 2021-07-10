@extends('admin.home')

@section('main')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route("home") }}">Главная</a></li>
            <li class="breadcrumb-item"><a href="{{ route("admin.{$category}") }}">{{ $categoryName }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">Редактировать мета данные</li>
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
            <form action="{{ route('admin.meta.update', ['metum' => $category]) }}" method="POST" enctype='multipart/form-data'>
                @csrf
                @method('PUT')
                <input type="hidden" name="category" value="{{ $category }}">
                <div class="form-group">
                    <label for="name">Заголовок страницы *</label>
                    <input name="title" value="{{ $meta->title }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Ключевые слова *</label>
                    <textarea name="keywords" rows="7" class="form-control">{{ $meta->keywords }}</textarea>
                </div>
                <div class="form-group">
                    <label for="name">Описание *</label>
                    <textarea name="description" rows="7" class="form-control">{{ $meta->description }}</textarea>
                </div>
                <hr>
                <button type="submit" class="btn btn-success">Сохранить</button>
            </form>
        </div>
    </div>
@endsection
