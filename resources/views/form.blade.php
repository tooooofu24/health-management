@extends('layouts.app')

@section('title', '健康チェック管理 - フォーム回答画面')
@section('nav_title', '健康フォーム回答')
@section('content')
<div class="container-lg py-2">
    <div class="card">
        <div class="card-body">
            <form action="">
                <div class="row">
                    <div class="col-12">
                        <label for="">回答する日付</label>
                        <div class="input-group">
                            <label class="input-group-text" for=""><i class="fa-solid fa-calendar"></i></label>
                            <input type="date" class="form-control" name="" id="" value="{{ Carbon\Carbon::today()->toDateString() }}">
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="">クラス</label>
                        <div class="input-group">
                            <label class="input-group-text" for=""><i class="fa-solid fa-school"></i></label>
                            <select name="" id="" class="form-select" id="">
                                @foreach(App\Models\Grade::all() as $grade)
                                <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="">氏名</label>
                        <div class="input-group">
                            <label class="input-group-text" for=""><i class="fa-solid fa-user"></i></label>
                            <select name="" id="" class="form-select" id="">
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="">昨晩の体温</label>
                        <div class="input-group">
                            <label class="input-group-text" for=""><i class="fa-solid fa-moon"></i></label>
                            <input type="number" class="form-control" name="" id="" max="40" min="34">
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="">起床時の体温</label>
                        <div class="input-group">
                            <label class="input-group-text" for=""><i class="fa-solid fa-sun"></i></label>
                            <input type="number" class="form-control" name="" id="" max="40" min="34">
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="">就寝時間</label>
                        <div class="input-group">
                            <label class="input-group-text" for=""><i class="fa-regular fa-moon"></i></label>
                            <input type="time" class="form-control" name="" id="">
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="">起床時間</label>
                        <div class="input-group">
                            <label class="input-group-text" for=""><i class="fa-regular fa-sun"></i></label>
                            <input type="time" class="form-control" name="" id="">
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="">咳はありますか？</label>
                        <div class="input-group">
                            <label class="input-group-text" for=""><i class="fa-solid fa-head-side-cough"></i></label>
                            <select name="" id="" class="form-select" id="" required>
                                <option value="1">はい</option>
                                <option value="0" selected>いいえ</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="">息苦しさはありますか？</label>
                        <div class="input-group">
                            <label class="input-group-text" for=""><i class="fa-solid fa-head-side-mask"></i></label>
                            <select name="" id="" class="form-select" id="" required>
                                <option value="1">はい</option>
                                <option value="0" selected>いいえ</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="">だるさはありますか？</label>
                        <div class="input-group">
                            <label class="input-group-text" for=""><i class="fa-solid fa-face-tired"></i></label>
                            <select name="" id="" class="form-select" id="" required>
                                <option value="1">はい</option>
                                <option value="0" selected>いいえ</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="">食欲の減退はありますか？</label>
                        <div class="input-group">
                            <label class="input-group-text" for=""><i class="fa-solid fa-face-frown"></i></label>
                            <select name="" id="" class="form-select" id="" required>
                                <option value="1">はい</option>
                                <option value="0" selected>いいえ</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="">通院していますか？</label>
                        <div class="input-group">
                            <label class="input-group-text" for=""><i class="fa-solid fa-hospital"></i></label>
                            <select name="" id="" class="form-select" id="" required>
                                <option value="1">はい</option>
                                <option value="0" selected>いいえ</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="">その他症状など</label>
                        <div class="input-group">
                            <label class="input-group-text" for=""><i class="fa-solid fa-circle-info"></i></label>
                            <textarea name="" id="" rows="2" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection