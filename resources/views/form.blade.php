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
                <form-component :classes='@json($classes)'></form-component>
            </div>
        </div>
    </div>
</div>
@endsection