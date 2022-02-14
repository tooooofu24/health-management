@extends('layouts.admin')

@section('content')
<div class="container-lg py-2">
    <div class="card">
        <div class="card-body">
            <form action="" class="py-3">
                <div class="input-group" style="width: 300px;">
                    <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                    </span>
                    <input type="date" name="date" class="form-control" value="" onchange="submit(this.form)">
                </div>
            </form>
            <table class="table table-hover table-centered border-0 w-100">
                <thead class="table-secondary border-0 rounded">
                    <tr class="rounded">
                        <th scope="col" class="text-nowrap border-0 rounded-start">出席番号</th>
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
                        <th scope="col" class="text-nowrap border-0" style="font-size: small">備考</th>
                        <th class="text-nowrap border-0 rounded-end"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($answers as $answer)
                    <tr>
                        <td class="align-middle text-nowrap border-0">{{ $answer->student->number }}</td>
                        <td class="align-middle text-nowrap border-0">{{ $answer->student->name }}</td>
                        <td class="align-middle text-nowrap border-0">{{ $answer->night_temp }}</td>
                        <td class="align-middle text-nowrap border-0">{{ $answer->morning_temp }}</td>
                        <td class="align-middle text-nowrap border-0">{{ $answer->bed_time }}</td>
                        <td class="align-middle text-nowrap border-0">{{ $answer->wakeup_time }}</td>
                        <td class="align-middle text-nowrap border-0">{{ $answer->q1? 'あり' : 'なし'}}</td>
                        <td class="align-middle text-nowrap border-0">{{ $answer->q2? 'あり' : 'なし'}}</td>
                        <td class="align-middle text-nowrap border-0">{{ $answer->q3? 'あり' : 'なし'}}</td>
                        <td class="align-middle text-nowrap border-0">{{ $answer->q4? 'あり' : 'なし'}}</td>
                        <td class="align-middle text-nowrap border-0">{{ $answer->q5? 'あり' : 'なし'}}</td>
                        <td class="align-middle border-0">{{ $answer->comment }}</td>
                        <td class="align-middle text-nowrap border-0"></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection