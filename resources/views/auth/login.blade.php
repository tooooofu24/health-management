@extends('layouts.app')

@section('title','健康チェック管理 - 生徒・保護者様ログイン')
@section('nav_title','生徒・保護者様ログイン')
@section('content')
<div class="container-lg h-100">
    <div class="d-flex h-100 justify-content-center align-items-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">生徒・保護者様ログイン</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">メールアドレス</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">パスワード</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        ログイン状態を保持する
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">
                                    ログイン
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="text-end p-3">
                <span>教職員の方は<a href="{{ route('admin.login') }}">こちら</a></span>
            </div>
        </div>
    </div>
</div>
@endsection