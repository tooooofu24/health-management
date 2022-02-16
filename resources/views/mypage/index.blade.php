@extends('layouts.app')

@section('title', '健康チェック管理 - マイページ')
@section('nav_title', auth()->user()->student->name.'さんのマイページ')
@section('content')
<div class="container-lg py-2">
    <div class="card">
        <div class="card-body">
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
                            <th scope="col" class="border-0 text-nowrap rounded-end text-center" style="min-width: 15rem;">備考</th>
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
                            <td class="align-middle border-0 rounded-end" style="font-size: 0.8rem;">{{ $answer->comment }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection