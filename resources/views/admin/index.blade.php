@extends('layouts.app')

@section('title', '管理者画面 - トップページ')
@section('nav_title', '管理者画面')
@section('content')
<div class="container-lg py-2">
    <nav aria-label="breadcrumb" class="ps-2">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><i class="fa-solid fa-house"></i></li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-selected="true">ホーム</button>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="home" role="tabpanel">
                    @foreach($classes->pluck('grade')->unique() as $grade)
                    <div class="mt-3 px-2">
                        <h3 class="fs-4">{{ $grade }}学年</h3>
                    </div>
                    <div class="d-flex flex-wrap">
                        @foreach($classes->where('grade', $grade) as $class)
                        <div class="px-2 pb-2">
                            <a href="{{ route('admin.class', ['id'=>$class->id]) }}" class="btn btn-primary text-nowrap">{{ $class->name }}</a>
                        </div>
                        @endforeach
                    </div>
                    @endforeach

                    <div class="mt-3 px-2">
                        <h3 class="fs-4">部活動</h3>
                    </div>
                    <div class="d-flex flex-wrap">
                        @foreach($clubs as $club)
                        <div class="px-2 pb-2">
                            <a href="{{ route('admin.club', ['id'=>$club->id]) }}" class="btn btn-primary text-nowrap">{{ $club->name }}</a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection