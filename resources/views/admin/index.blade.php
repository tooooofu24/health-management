@extends('layouts.app')

@section('title', '管理者画面 - トップページ')
@section('nav_title', '管理者画面')
@section('content')
<div class="h-100 d-flex align-items-center">
    <div class="container-lg">
        <admin-top-component :classes='@json($classes)' :clubs='@json($clubs)'></admin-top-component>
    </div>
</div>
@endsection