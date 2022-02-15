@extends('layouts.admin')

@section('nav_title', '健康チェック管理 - トップページ')
@section('content')
<div class="h-100 d-flex align-items-center">
    <div class="container-lg">
        <div class="d-flex justify-content-between">
            @foreach($grades as $grade)
            <a href="{{ route('admin.class',['id'=>$grade->id]) }}" class="btn btn-success btn-lg">{{ $grade->name }}</a>
            @endforeach
        </div>
    </div>
</div>
@endsection