@extends('layouts.admin')

@section('nav_title', '健康チェック管理 - クラス別ページ')
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
            <form action="" class="pb-3">
                <div class="input-group" style="width: 300px;">
                    <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                    </span>
                    <input type="date" name="date" class="form-control" value="{{ $date }}" onchange="submit(this.form)">
                </div>
            </form>
            <table class="table table-hover table-centered border-0 w-100">
                <thead class="table-secondary border-0 rounded">
                    <tr class="rounded">
                        <th scope="col" class="text-nowrap border-0 rounded-start text-center">番号</th>
                        <th scope="col" class="text-nowrap border-0">名前</th>
                        <th scope="col" class="text-nowrap border-0">体温(夜)</th>
                        <th scope="col" class="text-nowrap border-0">体温(朝)</th>
                        <th scope="col" class="text-nowrap border-0">就寝時間</th>
                        <th scope="col" class="text-nowrap border-0">起床時間</th>
                        <th scope="col" class="text-nowrap border-0">咳</th>
                        <th scope="col" class="text-nowrap border-0">息苦しさ</th>
                        <th scope="col" class="text-nowrap border-0">だるさ</th>
                        <th scope="col" class="text-nowrap border-0">食欲減</th>
                        <th scope="col" class="text-nowrap border-0">通院</th>
                        <th scope="col" class="border-0">備考</th>
                        <th class="text-nowrap border-0"></th>
                        <th class="text-nowrap border-0 rounded-end"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                    <tr>
                        <td class="align-middle text-nowrap border-0 text-center rounded-start">{{ $student->number }}</td>
                        <td class="align-middle text-nowrap border-0">{{ $student->name }}</td>
                        <td class="align-middle text-nowrap border-0">{{ optional($student->answer)->night_temp }}</td>
                        <td class="align-middle text-nowrap border-0">{{ optional($student->answer)->morning_temp }}</td>
                        <td class="align-middle text-nowrap border-0">{{ optional(optional($student->answer)->bed_time)->format('H:i') }}</td>
                        <td class="align-middle text-nowrap border-0">{{ optional(optional($student->answer)->wakeup_time)->format('H:i') }}</td>
                        <td class="align-middle text-nowrap border-0">{{ optional($student->answer)->q1 }}</td>
                        <td class="align-middle text-nowrap border-0">{{ optional($student->answer)->q2 }}</td>
                        <td class="align-middle text-nowrap border-0">{{ optional($student->answer)->q3 }}</td>
                        <td class="align-middle text-nowrap border-0">{{ optional($student->answer)->q4 }}</td>
                        <td class="align-middle text-nowrap border-0">{{ optional($student->answer)->q5 }}</td>
                        <td class="align-middle border-0">{{ optional($student->answer)->comment }}</td>
                        <td class="align-middle text-nowrap border-0 text-center pe-0">
                            @if($student->answer && !$student->answer->checked_at)
                            <common-check-button-component :id='@json($student->answer->id)'></common-check-button-component>
                            @elseif($student->answer && $student->answer->checked_at)
                            <button class="btn btn-success" disabled>承認済</button>
                            @else
                            <button class="btn btn-danger" disabled>未回答</button>
                            @endif
                        </td>
                        <td class="align-middle text-nowrap border-0 text-center ps-0 rounded-end">
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
    <div aria-live="polite" aria-atomic="true" class="position-relative">
        <div class="toast-container position-absolute top-0 end-0 p-3">
            @foreach($students as $student)
            @if($student->answer && !$student->answer->checked_at)
            <div class="toast hide w-auto" role="alert" aria-live="assertive" aria-atomic="true" data-id="{{ $student->answer->id }}">
                <div class="toast-body px-4">承認しました！</div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>
@endsection