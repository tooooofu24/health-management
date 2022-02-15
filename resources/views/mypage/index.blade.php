@extends('layouts.app')

@section('nav_title', 'マイページ')
@section('content')
<div class="container-lg py-2">
    <div class="card">
        <div class="card-body">
            <table class="table table-hover table-centered border-0 w-100">
                <thead class="table-secondary border-0 rounded">
                    <tr class="rounded">
                        <th scope="col" class="text-nowrap border-0 rounded-start text-center">日時</th>
                        <th scope="col" class="text-nowrap border-0">体温(夜)</th>
                        <th scope="col" class="text-nowrap border-0">体温(朝)</th>
                        <th scope="col" class="text-nowrap border-0">就寝時間</th>
                        <th scope="col" class="text-nowrap border-0">起床時間</th>
                        <th scope="col" class="text-nowrap border-0">咳</th>
                        <th scope="col" class="text-nowrap border-0">息苦しさ</th>
                        <th scope="col" class="text-nowrap border-0">だるさ</th>
                        <th scope="col" class="text-nowrap border-0">食欲減</th>
                        <th scope="col" class="text-nowrap border-0">通院</th>
                        <th scope="col" class="border-0 rounded-end">備考</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($answers as $answer)
                    <tr>
                        <td class="align-middle text-nowrap border-0 text-center rounded-start">{{ $answer->date->format('Y年m月d日') }}</td>
                        <td class="align-middle text-nowrap border-0">{{ $answer->night_temp }}</td>
                        <td class="align-middle text-nowrap border-0">{{ $answer->morning_temp }}</td>
                        <td class="align-middle text-nowrap border-0">{{ $answer->bed_time->format('H:i') }}</td>
                        <td class="align-middle text-nowrap border-0">{{ $answer->wakeup_time->format('H:i') }}</td>
                        <td class="align-middle text-nowrap border-0">{{ $answer->q1 }}</td>
                        <td class="align-middle text-nowrap border-0">{{ $answer->q2 }}</td>
                        <td class="align-middle text-nowrap border-0">{{ $answer->q3 }}</td>
                        <td class="align-middle text-nowrap border-0">{{ $answer->q4 }}</td>
                        <td class="align-middle text-nowrap border-0">{{ $answer->q5 }}</td>
                        <td class="align-middle border-0 rounded-end">{{ $answer->comment }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection