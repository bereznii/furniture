@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="list-group">
                <a href="{{ route('admin.categories.projects.index', ['categoryKey' => 'kitchen']) }}" class="list-group-item list-group-item-action @if(strpos(url()->current(), 'kitchen')  !== false) active @endif">
                    Кухни
                </a>
                <a href="{{ route('admin.categories.projects.index', ['categoryKey' => 'hall']) }}" class="list-group-item list-group-item-action @if(strpos(url()->current(), 'hall')  !== false) active @endif">
                    Шкафы / Прихожие
                </a>
                <a href="{{ route('admin.categories.projects.index', ['categoryKey' => 'commercial']) }}" class="list-group-item list-group-item-action @if(strpos(url()->current(), 'commercial')  !== false) active @endif">
                    Офисная / Торговая мебель
                </a>
                <a href="{{ route('admin.categories.projects.index', ['categoryKey' => 'wardrobe']) }}" class="list-group-item list-group-item-action @if(strpos(url()->current(), 'wardrobe')  !== false) active @endif">
                    Гардеробы / Тумбы
                </a>
                <a href="{{ route('admin.categories.projects.index', ['categoryKey' => 'children']) }}" class="list-group-item list-group-item-action @if(strpos(url()->current(), 'children')  !== false) active @endif">
                    Детская мебель
                </a>
            </div>
        </div>
        <div class="col-md-9">
            @yield('breadcrumbs')

            @if(session()->has('status'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('status') }}
                </div>
            @endif

            @yield('main')
        </div>
    </div>
</div>
@endsection
