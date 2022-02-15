@extends('layouts.app')

@section('nav_title', 'トップページ')
@section('nav_title', 'トップページ')
@section('content')
<div class="container-lg h-100">
    <div class="d-flex h-100 justify-content-center align-items-center">
        <div class="row fs-5">
            <div class="col pe-5">
                <a href="{{ route('login') }}">
                    <i class="fa-solid fa-user-group fa-10x"></i><br>
                    <div class="text-center pt-3">生徒・保護者の方</div>
                </a>
            </div>
            <div class="col ps-5">
                <a href="{{ route('admin.login') }}">
                    <i class="fa-solid fa-user-graduate fa-10x"></i>
                    <div class="text-center pt-3">教職員の方</div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection