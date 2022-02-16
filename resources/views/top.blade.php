@extends('layouts.app')

@section('title', '健康チェック管理 - トップページ')
@section('nav_title', 'トップページ')
@section('content')
<div class="container-lg h-100">
    <div class="d-flex h-100 justify-content-center align-items-center">
        <div class="row fs-5">
            <div class="col text-center">
                <a href="{{ route('login') }}">
                    <i class="fa-solid fa-user-group" style="font-size: 15vw;"></i><br>
                    <div class="pt-3">生徒・保護者の方</div>
                </a>
            </div>
            <div class="col text-center">
                <a href="{{ route('admin.login') }}">
                    <i class="fa-solid fa-user-graduate" style="font-size: 15vw;"></i>
                    <div class="pt-3">教職員の方</div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection