@extends('layouts.app')

@section('title', '健康チェック管理 - フォーム回答画面')
@section('nav_title', '健康フォーム回答')
@section('content')
<div class="container-lg py-2">
    <div class="card">
        <div class="card-header">
            健康チェックフォーム
        </div>
        <div class="card-body">
            <div class="mx-auto" style="max-width: 50rem;">
                @if(Route::is('form.show.1'))
                @include('form.components.one')
                @endif

                @if(Route::is('form.show.2'))
                @include('form.components.two')
                @endif

                @if(Route::is('form.show.3'))
                @include('form.components.three')
                @endif

                @if(Route::is('form.show.4'))
                @include('form.components.four')
                @endif
            </div>
        </div>
    </div>
</div>
@endsection