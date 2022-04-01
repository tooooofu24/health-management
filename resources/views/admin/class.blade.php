@extends('layouts.app')

@section('title', '管理者画面 - クラス別ページ')
@section('nav_title', "クラス別ページ 『{$class->name}』")
@section('content')
<div class="container-lg py-2">
    <nav aria-label="breadcrumb" class="ps-2">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}"><i class="fa-solid fa-house"></i></a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $class->name }}</li>
        </ol>
    </nav>
    <div class="card mb-3">
        <div class="card-body">
            <div class="d-flex justify-content-between mb-3">
                <form action="">
                    <div class="input-group" style="width: 300px;">
                        <span class="input-group-text">
                            <i class="far fa-calendar-alt"></i>
                        </span>
                        <input type="date" name="date" class="form-control" value="{{ $date }}" onchange="submit(this.form)">
                    </div>
                </form>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-plus me-2"></i>新規登録</button>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-centered ">
                    <thead class="table-secondary">
                        <tr>
                            <th scope="col" class="text-nowrap rounded-start text-center">番号</th>
                            <th scope="col" class="text-nowrap text-center">名前</th>
                            <th scope="col" class="text-nowrap text-center">体温(夜)</th>
                            <th scope="col" class="text-nowrap text-center">体温(朝)</th>
                            <th scope="col" class="text-nowrap text-center">就寝時間</th>
                            <th scope="col" class="text-nowrap text-center">起床時間</th>
                            <th scope="col" class="text-nowrap text-center">咳</th>
                            <th scope="col" class="text-nowrap text-center">息苦しさ</th>
                            <th scope="col" class="text-nowrap text-center">だるさ</th>
                            <th scope="col" class="text-nowrap text-center">食欲減</th>
                            <th scope="col" class="text-nowrap text-center">通院</th>
                            <th scope="col" class="text-center">備考</th>
                            <th class="text-nowrap border-0"></th>
                            <th class="text-nowrap rounded-end"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                        <tr>
                            <td class="align-middle text-nowrap text-center rounded-start">{{ $student->number }}</td>
                            <td class="align-middle text-nowrap text-center">{{ $student->name }}</td>
                            <td class="align-middle text-nowrap text-center">{{ optional($student->answer)->night_temp }}</td>
                            <td class="align-middle text-nowrap text-center">{{ optional($student->answer)->morning_temp }}</td>
                            <td class="align-middle text-nowrap text-center">{{ optional(optional($student->answer)->bed_time)->format('H:i') }}</td>
                            <td class="align-middle text-nowrap text-center">{{ optional(optional($student->answer)->wakeup_time)->format('H:i') }}</td>
                            <td class="align-middle text-nowrap text-center">{{ optional($student->answer)->q1 }}</td>
                            <td class="align-middle text-nowrap text-center">{{ optional($student->answer)->q2 }}</td>
                            <td class="align-middle text-nowrap text-center">{{ optional($student->answer)->q3 }}</td>
                            <td class="align-middle text-nowrap text-center">{{ optional($student->answer)->q4 }}</td>
                            <td class="align-middle text-nowrap text-center">{{ optional($student->answer)->q5 }}</td>
                            <td class="align-middle text-nowrap">{{ optional($student->answer)->comment }}</td>
                            <td class="align-middle text-nowrap text-center">
                                @if($student->answer && !$student->answer->checked_at)
                                <common-check-button-component :id='@json($student->answer->id)'></common-check-button-component>
                                @elseif($student->answer && $student->answer->checked_at)
                                <button class="btn btn-success" disabled>承認済</button>
                                @else
                                <button class="btn btn-danger" disabled>未回答</button>
                                @endif
                            </td>
                            <td class="align-middle text-nowrap text-center ps-0 rounded-end">
                                <a class="btn btn-secondary" href="{{ route('admin.student',['id'=>$student->id]) }}">
                                    <i class="fa-solid fa-user-pen"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- 登録モーダル --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">生徒新規登録</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex">
                        <div class="col-6 px-2">
                            <label for="">生徒氏名</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                <input type="text" class="form-control" placeholder="氏名を入力してください" aria-label="Username">
                            </div>
                        </div>
                        <div class="col-6 px-2">
                            <label for="">クラス</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa-solid fa-school"></i></span>
                                <select name="" id="" class="form-select">
                                    @foreach(App\Models\Grade::all() as $grade)
                                    <option value="" @if($grade->id == $class->id) selected @endif>{{ $grade->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">キャンセル</button>
                    <button type="button" class="btn btn-primary">作成</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection