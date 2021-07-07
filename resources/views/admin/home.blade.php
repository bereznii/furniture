@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="list-group">
                <a href="{{ route('admin.kitchen') }}" class="list-group-item list-group-item-action @if(url()->current() === route('admin.kitchen')) active @endif">
                    Кухни
                </a>
                <a href="{{ route('admin.hall') }}" class="list-group-item list-group-item-action @if(url()->current() === route('admin.hall')) active @endif">
                    Шкафы / Прихожие
                </a>
                <a href="{{ route('admin.commercial') }}" class="list-group-item list-group-item-action @if(url()->current() === route('admin.commercial')) active @endif">
                    Офисная / Торговая мебель
                </a>
                <a href="{{ route('admin.wardrobe') }}" class="list-group-item list-group-item-action @if(url()->current() === route('admin.wardrobe')) active @endif">
                    Гардеробы / Навесные тумбы
                </a>
                <a href="{{ route('admin.children') }}" class="list-group-item list-group-item-action @if(url()->current() === route('admin.children')) active @endif">
                    Детская мебель
                </a>
            </div>
        </div>
        <div class="col-md-9">
            @yield('main')
        </div>
    </div>
</div>
@endsection
