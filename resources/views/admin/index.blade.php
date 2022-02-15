@extends('layouts.admin')

@section('nav_title', '健康チェック管理 - トップページ')
@section('content')
<div class="h-100 d-flex align-items-center">
    <div class="container-lg row justify-content-center">
        <admin-top-component :classes='@json($classes)' :clubs='@json($clubs)'></admin-top-component>
    </div>
</div>
@endsection