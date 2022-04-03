@extends('layouts.app')

@section('title', '管理者画面 - 生徒別ページ')
@section('nav_title', "生徒別ページ 『{$student->name}』")
@section('content')
<div class="container-lg py-2">
    <nav aria-label="breadcrumb" class="ps-2">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}"><i class="fa-solid fa-house"></i></a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.class',['id'=>$student->class->id]) }}">{{ $student->class->name }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $student->name }}</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-body">
            <div class="mb-3 text-end">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-pen me-2"></i>詳細・編集</button>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-centered border-0 w-100">
                    <thead class="table-secondary border-0 rounded">
                        <tr class="rounded">
                            <th scope="col" class="text-nowrap border-0 rounded-start text-center">日時</th>
                            <th scope="col" class="text-nowrap border-0 text-center">体温(夜)</th>
                            <th scope="col" class="text-nowrap border-0 text-center">体温(朝)</th>
                            <th scope="col" class="text-nowrap border-0 text-center">就寝時間</th>
                            <th scope="col" class="text-nowrap border-0 text-center">起床時間</th>
                            <th scope="col" class="text-nowrap border-0 text-center">咳</th>
                            <th scope="col" class="text-nowrap border-0 text-center">息苦しさ</th>
                            <th scope="col" class="text-nowrap border-0 text-center">だるさ</th>
                            <th scope="col" class="text-nowrap border-0 text-center">食欲減</th>
                            <th scope="col" class="text-nowrap border-0 text-center">通院</th>
                            <th scope="col" class="border-0 text-nowrap text-center" style="min-width: 15rem;">備考</th>
                            <th class="text-nowrap border-0 rounded-end"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($answers as $answer)
                        <tr>
                            <td class="align-middle text-nowrap border-0 text-center rounded-start">{{ $answer->date->format('Y年m月d日') }}</td>
                            <td class="align-middle text-nowrap border-0 text-center">{{ $answer->night_temp }}</td>
                            <td class="align-middle text-nowrap border-0 text-center">{{ $answer->morning_temp }}</td>
                            <td class="align-middle text-nowrap border-0 text-center">{{ $answer->bed_time->format('H:i') }}</td>
                            <td class="align-middle text-nowrap border-0 text-center">{{ $answer->wakeup_time->format('H:i') }}</td>
                            <td class="align-middle text-nowrap border-0 text-center">{{ $answer->q1 }}</td>
                            <td class="align-middle text-nowrap border-0 text-center">{{ $answer->q2 }}</td>
                            <td class="align-middle text-nowrap border-0 text-center">{{ $answer->q3 }}</td>
                            <td class="align-middle text-nowrap border-0 text-center">{{ $answer->q4 }}</td>
                            <td class="align-middle text-nowrap border-0 text-center">{{ $answer->q5 }}</td>
                            <td class="align-middle border-0" style="font-size: 0.8rem;">{{ $answer->comment }}</td>
                            <td class="align-middle text-nowrap border-0 text-center rounded-end">
                                @if(!$answer->checked_at)
                                <common-check-button-component :id='@json($answer->id)'></common-check-button-component>
                                @else
                                <button class="btn btn-success" disabled>承認済</button>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h5 class="modal-title">生徒情報更新</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 px-2">
                                <label for="student_modal_name">生徒氏名</label>
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="student_modal_name"><i class="fa-solid fa-user"></i></label>
                                    <input id="student_modal_name" name="name" type="text" class="form-control" placeholder="氏名を入力してください" value="{{ $student->name }}">
                                </div>
                            </div>
                            <div class="col-md-6 px-2">
                                <label for="student_modal_class">クラス</label>
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="student_modal_class"><i class="fa-solid fa-school"></i></label>
                                    <select name="grade_id" id="student_modal_class" class="form-select">
                                        @foreach(App\Models\Grade::all() as $grade)
                                        <option value="" @if($grade->id == $student->grade_id) selected @endif>{{ $grade->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 px-2">
                                <label for="student_modal_number">出席番号</label>
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="student_modal_number"><i class="fa-solid fa-graduation-cap"></i></label>
                                    <select name="number" id="student_modal_number" class="form-select">
                                        @for($i=1; $i<=35; $i++) <option value="{{ $i }}" @if($i==$student->number) selected @endif>{{ $i }}</option>
                                            @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 px-2">
                                <label for="student_modal_club">部活動</label>
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="student_modal_club"><i class="fa-solid fa-baseball-bat-ball"></i></label>
                                    <select name="club_id" id="student_modal_club" class="form-select">
                                        <option value="">未所属</option>
                                        @foreach(App\Models\Club::all() as $club)
                                        <option value="" @if($student->club_id == $club->id) selected @endif>{{ $club->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">キャンセル</button>
                        <button type="submit" class="btn btn-primary">更新</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection